<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
	/** @var string */
	public string $type = 'mpeg4_gif';

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
