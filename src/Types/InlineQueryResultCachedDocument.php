<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultCachedDocument extends InlineQueryResult
{
	/** @var string */
	public string $type = 'document';

	/** @var string */
	public string $id;

	/** @var string */
	public string $title;

	/** @var string */
	public string $documentFileId;

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
