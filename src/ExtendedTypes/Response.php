<?php


namespace Sysbot\Telegram\ExtendedTypes;


use stdClass;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Sysbot\Telegram\API;
use Sysbot\Telegram\Constants\ApiClasses;
use Sysbot\Telegram\Constants\ReturnMap;
use Sysbot\Telegram\Types\Animation;
use Sysbot\Telegram\Types\Audio;
use Sysbot\Telegram\Types\ChatPhoto;
use Sysbot\Telegram\Types\Document;
use Sysbot\Telegram\Types\InlineQueryResultCachedAudio;
use Sysbot\Telegram\Types\InlineQueryResultCachedDocument;
use Sysbot\Telegram\Types\InlineQueryResultCachedGif;
use Sysbot\Telegram\Types\InlineQueryResultCachedMpeg4Gif;
use Sysbot\Telegram\Types\InlineQueryResultCachedPhoto;
use Sysbot\Telegram\Types\InlineQueryResultCachedSticker;
use Sysbot\Telegram\Types\InlineQueryResultCachedVideo;
use Sysbot\Telegram\Types\InlineQueryResultCachedVoice;
use Sysbot\Telegram\Types\PassportFile;
use Sysbot\Telegram\Types\PhotoSize;
use Sysbot\Telegram\Types\Response as ResponseType;
use Sysbot\Telegram\Types\ResponseParameters;
use Sysbot\Telegram\Types\Sticker;
use Sysbot\Telegram\Types\TypeInterface;
use Sysbot\Telegram\Types\Video;
use Sysbot\Telegram\Types\VideoNote;
use Sysbot\Telegram\Types\Voice;
use Throwable;

trait Response
{

    public stdClass|TypeInterface|array|int|string|bool|null $result = null;
    public stdClass|ResponseParameters|null $parameters = null;

    public function __construct(private API $api, private string $methodName)
    {
    }

    /**
     * @param bool $ok
     * @return ResponseType
     */
    public function setOk(bool $ok): ResponseType
    {
        $this->ok = $ok;
        /** @var ResponseType $this */
        return $this;
    }

    /**
     * @param array|bool|int|string|object|null $result
     * @return ResponseType
     */
    public function setResult(object|array|int|string|bool|null $result): ResponseType
    {
        if (is_object($result) or is_array($result)) {
            $parsedResult = $this->parseResult($result);
            if (null !== $parsedResult) {
                $this->result = $parsedResult;
                return $this;
            }
        }
        $this->result = $result;
        return $this;
    }

    /**
     * @param int|null $errorCode
     * @return ResponseType
     */
    public function setErrorCode(?int $errorCode): ResponseType
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @param string|null $description
     * @return ResponseType
     */
    public function setDescription(?string $description): ResponseType
    {
        $this->description = $description;
        return $this;
    }

    public function setParameters(?object $parameters): ResponseType
    {
        if (!empty($parameters) and !$parameters instanceof ResponseParameters) {
            try {
                $parsedParameters = $this->api->getSerializer()->denormalize(
                    $parameters,
                    ResponseParameters::class,
                    null,
                    [AbstractObjectNormalizer::ENABLE_MAX_DEPTH => true]
                );
                $parameters = $parsedParameters;
            } catch (ExceptionInterface) {
                // nothing
            }
        }
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @param object|array $result
     * @return TypeInterface|TypeInterface[]|null
     */
    public function parseResult(object|array $result): TypeInterface|array|null
    {
        $parsedResult = null;
        $resultTypes = ReturnMap::MAP[$this->methodName] ?? null;
        if (empty($resultTypes)) {
            return null;
        }
        foreach ($resultTypes as $resultType) {
            $args = [AbstractObjectNormalizer::ENABLE_MAX_DEPTH => true];
            $args += ApiClasses::buildArgs($this->api);
            if (is_array($result)) {
                $resultType .= '[]';
            }
            try {
                $parsedResult = $this->api->getSerializer()->denormalize($result, $resultType, null, $args);
            } catch (Throwable) {
                $parsedResult = null;
            }
        }
        return $parsedResult;
    }
}