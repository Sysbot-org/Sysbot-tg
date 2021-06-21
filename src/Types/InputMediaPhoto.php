<?php

namespace Sysbot\Telegram\Types;

class InputMediaPhoto extends InputMedia
{

    /** @var string */
    public string $type = 'photo';

    /** @var string */
    public string $media;

    /** @var string|null */
    public ?string $caption = null;

    /** @var string|null */
    public ?string $parseMode = null;

    /** @var Array<MessageEntity>|null */
    public ?array $captionEntities = null;
}
