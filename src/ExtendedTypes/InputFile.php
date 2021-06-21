<?php

namespace Sysbot\Telegram\ExtendedTypes;


use Sysbot\Telegram\Exceptions\BadFileException;
use Sysbot\Telegram\Exceptions\InvalidArgumentException;

trait InputFile
{

    private mixed $inputFile;
    private bool $multipart = false;


    /**
     * InputFile constructor.
     * @param mixed $inputFile
     * @throws InvalidArgumentException
     * @throws BadFileException
     */
    public function __construct(mixed $inputFile)
    {
        if (is_resource($inputFile) and get_resource_type($inputFile) == 'stream') {
            $this->multipart = true;
            $this->inputFile = $inputFile;
            return;
        }
        if (!is_string($inputFile)) {
            throw new InvalidArgumentException('Invalid file type');
        }
        if (file_exists($inputFile)) {
            if (is_dir($inputFile)) {
                throw new BadFileException('You can\'t upload a directory');
            }
            $this->multipart = true;
            $inputFile = fopen($inputFile, 'rb');
            if (false === $inputFile) {
                throw new BadFileException('Unable to open file');
            }
        }
        $this->inputFile = $inputFile;
    }

    /**
     * @return mixed
     */
    public function getInputFile(): mixed
    {
        return $this->inputFile;
    }

    /**
     * @return bool
     */
    public function isMultipart(): bool
    {
        return $this->multipart;
    }

}
