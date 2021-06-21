<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class Voice implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $fileId;

    /** @var string */
    public string $fileUniqueId;

    /** @var int */
    public int $duration;

    /** @var string|null */
    public ?string $mimeType = null;

    /** @var int|null */
    public ?int $fileSize = null;
}
