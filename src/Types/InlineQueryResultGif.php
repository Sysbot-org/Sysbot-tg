<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultGif extends InlineQueryResult
{
	/** @var string */
	public string $type = 'gif';

	/** @var string */
	public string $id;

	/** @var string */
	public string $gifUrl;

	/** @var int|null */
	public ?int $gifWidth = null;

	/** @var int|null */
	public ?int $gifHeight = null;

	/** @var int|null */
	public ?int $gifDuration = null;

	/** @var string */
	public string $thumbUrl;

	/** @var string|null */
	public ?string $thumbMimeType = null;

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
