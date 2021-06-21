<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\StreamInterface;
use Sysbot\Telegram\Exceptions\BadFileException;
use Sysbot\Telegram\Exceptions\InvalidArgumentException;

trait InputMedia
{

    protected StreamInterface|string $inputMedia;
    protected bool $multipart = false;
    public string $media;
    protected ?string $filename;


    /**
     * InputFile constructor.
     * @param mixed $inputMedia
     * @param string|null $filename
     * @throws BadFileException
     * @throws InvalidArgumentException
     */
    public function __construct(mixed $inputMedia, string $filename = null)
    {
        $attachId = md5(uniqid(more_entropy: true));
        if (is_resource($inputMedia) and get_resource_type($inputMedia) == 'stream') {
            $streamData = stream_get_meta_data($inputMedia);
            if (empty($filename)) {
                if ($streamData['wrapper_type'] != 'plainfile') {
                    throw new InvalidArgumentException('Filename is required for non-plainfile stream uploads');
                }
                $this->filename = $streamData['uri'];
            }
            $this->media = $attachId;
            $this->multipart = true;
            $this->inputMedia = Utils::streamFor($inputMedia);
            return;
        }
        if (!is_string($inputMedia)) {
            throw new InvalidArgumentException('Invalid file type');
        }
        if (file_exists($inputMedia)) {
            if (is_dir($inputMedia)) {
                throw new BadFileException('You can\'t upload a directory');
            }
            $this->filename = basename($inputMedia);
            $this->media = $attachId;
            $this->multipart = true;
            $inputMedia = fopen($inputMedia, 'rb');
            if (false === $inputMedia) {
                throw new BadFileException('Unable to open file');
            }
        }
        $this->filename ??= $filename;
        $this->inputMedia = Utils::streamFor($inputMedia);
        $this->media = $inputMedia;
    }

    /**
     * @return string|StreamInterface
     */
    public function getInputMedia(): string|StreamInterface
    {
        return $this->inputMedia;
    }

    /**
     * @return bool
     */
    public function isMultipart(): bool
    {
        return $this->multipart;
    }

    public static function create(mixed $inputMedia, string $type = null): \Sysbot\Telegram\Types\InputMedia
    {
        if (empty($type)) {
            $type = static::class;
            /** @noinspection PhpIncompatibleReturnTypeInspection */
            return new $type($inputMedia);
        }
        $class = \Sysbot\Telegram\Types\InputMedia::class . ucfirst($type);
        if (!class_exists($class)) {
            throw new InvalidArgumentException('Invalid media type');
        }
        return new $class($inputMedia);
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

}