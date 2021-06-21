<?php


namespace Sysbot\Telegram\Helpers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Sysbot\Telegram\Exceptions\TelegramAPIException;
use Sysbot\Telegram\Exceptions\TelegramBadRequestException;
use Sysbot\Telegram\Exceptions\TelegramForbiddenException;
use Sysbot\Telegram\Exceptions\TelegramNotFoundException;
use Sysbot\Telegram\Exceptions\TelegramUnauthorizedException;

trait FileDownloader
{

    public function downloadFile(string $remotePath): PromiseInterface
    {
        /** @var Client $client */
        $client = $this->client;
        $uri = sprintf('/file/bot%s/%s', $this->token, $remotePath);
        return $client->getAsync($uri)->then(
            function (ResponseInterface $response) {
                return $response->getBody();
            },
            function (RequestException $e) {
                $message = sprintf(
                    'An unknown error occurred when trying to fetch the file (%s): %s',
                    $e->getCode(),
                    $e->getMessage()
                );
                if (!$e->hasResponse()) {
                    throw new TelegramAPIException($message);
                }
                $data = json_decode($e->getResponse()?->getBody());
                if (empty($data)) {
                    throw new TelegramAPIException($message);
                }
                match ($data->error_code) {
                    400 => throw new TelegramBadRequestException($data->description),
                    401 => throw new TelegramUnauthorizedException('Token invalid or expired'),
                    403 => throw new TelegramForbiddenException($data->description),
                    404 => throw new TelegramNotFoundException($data->description),
                    default => throw new TelegramAPIException(
                        sprintf(
                            'Telegram API returned an error (%s): %s',
                            $data->error_code ?? 'Unknown',
                            $data->description ?? 'Unknown'
                        )
                    )
                };
            }
        );
    }

}