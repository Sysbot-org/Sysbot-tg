<?php

namespace Sysbot\Telegram\Types;

class InputMediaAudio extends InputMedia
{

    /** @var string */
    public string $type = 'audio';

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
    public ?int $duration = null;

    /** @var string|null */
    public ?string $performer = null;

    /** @var string|null */
    public ?string $title = null;
}
