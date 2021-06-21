<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class Sticker implements TypeInterface
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

    /** @var bool */
    public bool $isAnimated;

    /** @var PhotoSize|null */
    public ?PhotoSize $thumb = null;

    /** @var string|null */
    public ?string $emoji = null;

    /** @var string|null */
    public ?string $setName = null;

    /** @var MaskPosition|null */
    public ?MaskPosition $maskPosition = null;

    /** @var int|null */
    public ?int $fileSize = null;
}
