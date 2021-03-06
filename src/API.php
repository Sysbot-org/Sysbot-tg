<?php


namespace Sysbot\Telegram;

use Doctrine\Common\Annotations\AnnotationReader;
use Generator;
use GuzzleHttp\Client;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sysbot\Telegram\Common\NameNormalizer;
use Sysbot\Telegram\Constants\ApiClasses;
use Sysbot\Telegram\Constants\UpdateTypes;
use Sysbot\Telegram\Exceptions\TelegramAPIException;
use Sysbot\Telegram\Exceptions\TelegramBadRequestException;
use Sysbot\Telegram\Exceptions\TelegramConflictException;
use Sysbot\Telegram\Exceptions\TelegramForbiddenException;
use Sysbot\Telegram\Exceptions\TelegramNotFoundException;
use Sysbot\Telegram\Exceptions\TelegramServerException;
use Sysbot\Telegram\Exceptions\TelegramTooManyRequestsException;
use Sysbot\Telegram\Exceptions\TelegramUnauthorizedException;
use Sysbot\Telegram\Helpers\FileDownloader;
use Sysbot\Telegram\Helpers\TypeInstantiator;
use Sysbot\Telegram\Types\InputFile;
use Sysbot\Telegram\Types\InputMedia;
use Sysbot\Telegram\Types\Response;
use Sysbot\Telegram\Types\Update;
use Sysbot\Telegram\Types\WebhookInfo;

/**
 * Class API
 * @package Sysbot\Telegram
 */
class API
{

    use BaseAPI, FileDownloader, TypeInstantiator;

    /**
     * Official Telegram bot API URL.
     */
    public const BOT_API_URL = 'https://api.telegram.org/bot';

    /**
     * @var Client
     */
    private Client $client;
    /**
     * @var Serializer
     */
    private Serializer $serializer;
    /**
     * @var array
     */
    public array $defaultArgs = [];
    /**
     * @var array
     */
    public array $allowedUpdates = [];


    /**
     * API constructor.
     * @param string $token
     * @param string $apiEndpoint
     * @param float $timeout
     */
    public function __construct(
        private string $token,
        private string $apiEndpoint = self::BOT_API_URL,
        private float $timeout = 0
    ) {
        $apiUri = $this->apiEndpoint . $this->token . '/';
        $this->client = new Client(['base_uri' => $apiUri, 'timeout' => $timeout]);
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $discriminator = new ClassDiscriminatorFromClassMetadata($classMetadataFactory);
        $this->serializer = new Serializer(
            [
                new ObjectNormalizer(
                    $classMetadataFactory,
                    new CamelCaseToSnakeCaseNameConverter(),
                    null,
                    new ReflectionExtractor(),
                    $discriminator
                ),
                new ArrayDenormalizer()
            ],
            [
                new JsonEncoder()
            ]
        );
    }

    /**
     * @param array $requests
     * @param callable|null $onFulfilled
     * @param callable|null $onRejected
     * @return PromiseInterface[]
     * @throws ExceptionInterface
     */
    public function sendMultipleRequests(
        array $requests,
        ?callable $onFulfilled = null,
        ?callable $onRejected = null
    ): array {
        $result = [];
        foreach ($requests as $request) {
            $result[] = $this->sendRequest($request['method'], $request['args'])
                ->then($onFulfilled, $onRejected);
        }
        return $result;
    }

    /**
     * @throws ExceptionInterface
     */
    private function buildMultipartArgs(array $args): array
    {
        $result = [];
        $cleanInputMedia = function () {
            unset($this->inputMedia);
            unset($this->multipart);
        };
        foreach ($args as $index => $arg) {
            if ('media' == $index and is_array($arg)) {
                /** @var InputMedia $inputMedia */
                foreach ($arg as $inputMedia) {
                    if ($inputMedia->isMultipart()) {
                        $result[] = [
                            'name' => $inputMedia->media,
                            'contents' => (string)$inputMedia->getInputMedia(),
                            'filename' => $inputMedia->getFilename()
                        ];
                        $inputMedia->media = 'attach://' . $inputMedia->media;
                        $cleanInputMedia->call($inputMedia);
                    }
                }
            }
            if (($arg instanceof InputMedia) and $arg->isMultipart()) {
                $result[] = [
                    'name' => $arg->media,
                    'contents' => (string)$arg->getInputMedia(),
                    'filename' => $arg->getFilename()
                ];
                $arg->media = 'attach://' . $arg->media;
                $cleanInputMedia->call($arg);
            }
            $result[] = [
                'name' => $index,
                'contents' => $arg
            ];
        }
        $result = $this->serializer->normalize(
            $result,
            null,
            [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
        );
        foreach ($result as $index => $item) {
            if (is_array($item['contents'])) {
                $item['contents'] = $this->serializer->serialize(
                    $item['contents'],
                    'json',
                    [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
                );
                $result[$index] = $item;
            }
        }
        return $result;
    }

    /**
     * @param string $method
     * @param array $args
     * @return PromiseInterface
     * @throws ExceptionInterface
     */
    public function sendRequest(string $method, array $args): PromiseInterface
    {
        if (!empty($this->defaultArgs)) {
            $args = array_merge($this->defaultArgs, $args);
        }
        $useMultipart = false;
        foreach ($args as $index => $arg) {
            // I don't know why, but the Serializer sometimes freaks out when trying to convert camelCase to snake_case
            // So, I'm doing it myself
            $normalizedIndex = NameNormalizer::camelCaseToSnakeCase($index);
            unset($args[$index]);
            $args[$normalizedIndex] = $arg;
            if (($arg instanceof InputFile or $arg instanceof InputMedia) and $arg->isMultipart()) {
                $useMultipart = true;
            }
            if ('media' == $index and is_array($arg)) {
                /** @var InputMedia $media */
                foreach ($arg as $media) {
                    if ($media->isMultipart()) {
                        $useMultipart = true;
                    }
                }
            }
        }
        $promise = null;
        if ($useMultipart) {
            $args = $this->buildMultipartArgs($args);
            $promise = $this->client->postAsync(
                $method,
                [
                    'multipart' => $args,
                    'headers' => ['Connection' => 'Keep-Alive', 'Keep-Alive' => '120'],
                    'http_errors' => false
                ]
            );
        }
        $promise ??= $this->client->postAsync(
            $method,
            [
                'body' => $this->serializer->serialize(
                    (object)$args,
                    'json',
                    [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]
                ),
                'headers' => [
                    'Connection' => 'Keep-Alive',
                    'Keep-Alive' => '120',
                    'Content-Type' => 'application/json'
                ],
                'http_errors' => false
            ]
        );
        $api = $this;
        return $promise->then(
            function (ResponseInterface $webResponse) use ($api, $method) {
                $data = json_decode($webResponse->getBody());
                $response = (new Response($api, $method))
                    ->setOk($data->ok)
                    ->setResult($data->result ?? null)
                    ->setErrorCode($data->error_code ?? null)
                    ->setDescription($data->description ?? null)
                    ->setParameters($data->parameters ?? null);
                if (!$response->ok) {
                    match ($response->errorCode) {
                        400 => throw new TelegramBadRequestException($response->description),
                        401 => throw new TelegramUnauthorizedException('Token invalid or expired'),
                        403 => throw new TelegramForbiddenException($response->description),
                        404 => throw new TelegramNotFoundException($response->description),
                        409 => throw new TelegramConflictException($response->description),
                        429 => throw new TelegramTooManyRequestsException($response->description),
                        500, 502, 504 => throw new TelegramServerException(
                            'Bot API is encountering some issues, try again later: ' . ($response->description ?? 'Unknown.')
                        ),
                        default => throw new TelegramAPIException(
                            sprintf(
                                'Telegram API returned an error (%s): %s',
                                $response->errorCode ?? 'Unknown',
                                $response->description ?? 'Unknown'
                            )
                        )
                    };
                }
                return $response->result;
            }
        );
    }

    /**
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws ExceptionInterface
     */
    public function sendBlockingRequest(string $method, array $args): mixed
    {
        return $this->sendRequest($method, $args)->wait();
    }

    /**
     * @return Serializer
     */
    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }

    /**
     * @return Generator
     */
    public function iterUpdates(): Generator
    {
        $timeout = 0 == $this->timeout ? 30 : (int)$this->timeout;
        $offset = 0;
        $args = [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
            AbstractObjectNormalizer::ENABLE_MAX_DEPTH => true
        ];
        $args += ApiClasses::buildArgs($this);
        $data = file_get_contents('php://input');
        if (!empty($data) and is_string($data)) {
            yield $this->serializer->deserialize(
                $data,
                Update::class,
                'json',
                $args
            );
            return;
        }
        while (true) {
            $updates = $this->getUpdates(
                offset:         $offset,
                timeout:        $timeout,
                allowedUpdates: $this->allowedUpdates
            )->wait();
            /** @var Update $update */
            foreach ($updates as $update) {
                yield $update;
            }
            $offset = empty($update->updateId) ? $offset : $update->updateId + 1;
        }
    }

    /**
     * @return PromiseInterface
     */
    public function dropUpdates(): PromiseInterface
    {
        /** @var WebhookInfo $webhookInfo */
        $webhookInfo = $this->getWebhookInfo()->wait();
        if (!empty($webhookInfo->url)) {
            return $this->setWebhook(
                url:                $webhookInfo->url,
                ipAddress:          $webhookInfo->ipAddress,
                maxConnections:     $webhookInfo->maxConnections,
                allowedUpdates:     $webhookInfo->allowedUpdates,
                dropPendingUpdates: true
            );
        }
        return $this->getUpdates(offset: -1);
    }

    /**
     * Note: 8191 automatically enables all available types (chat_member included)
     *
     * @param int $allowedUpdates
     * @return $this
     */
    public function setAllowedUpdates(int $allowedUpdates = 8191): self
    {
        $types = UpdateTypes::getAllowedTypes($allowedUpdates);
        /** @var WebhookInfo $webhookInfo */
        $webhookInfo = $this->getWebhookInfo()->wait();
        if (!empty($webhookInfo->url)) {
            $this->setWebhook(
                url:            $webhookInfo->url,
                ipAddress:      $webhookInfo->ipAddress,
                maxConnections: $webhookInfo->maxConnections,
                allowedUpdates: $types,
            )->wait();
        }
        $this->allowedUpdates = $types;
        return $this;
    }

}
