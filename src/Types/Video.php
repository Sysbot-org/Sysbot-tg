<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class Video implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $fileId;

    /** @var string */
    public string $fileUniqueId;

    /** @var int */
    public int $width;

    /** @var int */
    public int $height;

    /** @var int */
    public int $duration;

    /** @var PhotoSize|null */
    public ?PhotoSize $thumb = null;

    /** @var string|null */
    public ?string $fileName = null;

    /** @var string|null */
    public ?string $mimeType = null;

    /** @var int|null */
    public ?int $fileSize = null;
}
