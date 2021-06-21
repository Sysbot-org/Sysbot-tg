<?php

namespace Sysbot\Telegram\Types;

class InputMediaDocument extends InputMedia
{

    /** @var string */
    public string $type = 'document';

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

    /** @var bool|null */
    public ?bool $disableContentTypeDetection = null;
}
