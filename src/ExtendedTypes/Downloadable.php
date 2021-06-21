<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\StreamInterface;
use Sysbot\Telegram\Types\File;

trait Downloadable
{

    use BaseType;

    public function download(string $path): PromiseInterface
    {
        $fileId = $this->bigFileId ?? $this->smallFileId ?? $this->audioFileId ?? $this->documentFileId ??
            $this->gifFileId ?? $this->mpeg4FileId ?? $this->photoFileId ?? $this->stickerFileId ?? $this->videoFileId ??
            $this->voiceFileId ?? $this->fileId;
        return $this->api->getFile($fileId)->then(
            function (File $file) {
                return $this->api->downloadFile($file->filePath);
            }
        )->then(
            function (StreamInterface $stream) use ($path) {
                return file_put_contents($path, $stream);
            }
        );
    }
}