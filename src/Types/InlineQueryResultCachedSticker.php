<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class InlineQueryResultCachedSticker implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $type;

    /** @var string */
    public string $id;

    /** @var string */
    public string $stickerFileId;

    /** @var InlineKeyboardMarkup|null */
    public ?InlineKeyboardMarkup $replyMarkup = null;

    /** @var InputMessageContent|null */
    public ?InputMessageContent $inputMessageContent = null;
}
