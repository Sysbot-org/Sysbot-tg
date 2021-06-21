<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class InlineQueryResultCachedMpeg4Gif implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $type;

    /** @var string */
    public string $id;

    /** @var string */
    public string $mpeg4FileId;

    /** @var string|null */
    public ?string $title = null;

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
