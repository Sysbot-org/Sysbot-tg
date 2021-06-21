<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class VideoNote implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $fileId;

    /** @var string */
    public string $fileUniqueId;

    /** @var int */
    public int $length;

    /** @var int */
    public int $duration;

    /** @var PhotoSize|null */
    public ?PhotoSize $thumb = null;

    /** @var int|null */
    public ?int $fileSize = null;
}
