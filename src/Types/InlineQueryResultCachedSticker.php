<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultCachedSticker extends InlineQueryResult
{
	/** @var string */
	public string $type = 'sticker';

	/** @var string */
	public string $id;

	/** @var string */
	public string $stickerFileId;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;

	/** @var InputMessageContent|null */
	public ?InputMessageContent $inputMessageContent = null;
}
