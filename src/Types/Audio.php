<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class Audio implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $fileId;

    /** @var string */
    public string $fileUniqueId;

    /** @var int */
    public int $duration;

    /** @var string|null */
    public ?string $performer = null;

    /** @var string|null */
    public ?string $title = null;

    /** @var string|null */
    public ?string $fileName = null;

    /** @var string|null */
    public ?string $mimeType = null;

    /** @var int|null */
    public ?int $fileSize = null;

    /** @var PhotoSize|null */
    public ?PhotoSize $thumb = null;
}
