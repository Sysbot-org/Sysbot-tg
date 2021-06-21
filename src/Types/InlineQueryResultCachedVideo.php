<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class InlineQueryResultCachedVideo implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $type;

    /** @var string */
    public string $id;

    /** @var string */
    public string $videoFileId;

    /** @var string */
    public string $title;

    /** @var string|null */
    public ?string $description = null;

    /** @var string|null */
    public ?string $caption = null;

    /** @var string|null */
    public ?string $parseMode = null;

    /** @var Array<MessageEntity>|null */
    public ?array $captionEntities = null;

    /** @var InlineKeyboardMarkup|null */
    public ?InlineKeyboardMarkup $replyMarkup = null;

    /** @var InputMessageContent|null */
    public ?InputMessageContent $inputMessageContent = null;
}
