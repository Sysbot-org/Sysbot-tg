<?php

namespace Sysbot\Telegram\Types;

class InputMediaVideo extends InputMedia
{

    /** @var string */
    public string $type = 'video';

    /** @var string */
    public string $media;

    /** @var InputFile|string|null */
    public InputFile|string|null $thumb = null;

    /** @var string|null */
    public ?string $caption = null;

    /** @var string|null */
    public ?string $parseMode = null;

    /** @var Array<MessageEntity>|null */
    public ?array $captionEntities = null;

    /** @var int|null */
    public ?int $width = null;

    /** @var int|null */
    public ?int $height = null;

    /** @var int|null */
    public ?int $duration = null;

    /** @var bool|null */
    public ?bool $supportsStreaming = null;
}
