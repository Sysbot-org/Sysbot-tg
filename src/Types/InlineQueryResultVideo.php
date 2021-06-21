<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultVideo implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string */
	public string $id;

	/** @var string */
	public string $videoUrl;

	/** @var string */
	public string $mimeType;

	/** @var string */
	public string $thumbUrl;

	/** @var string */
	public string $title;

	/** @var string|null */
	public ?string $caption = null;

	/** @var string|null */
	public ?string $parseMode = null;

	/** @var Array<MessageEntity>|null */
	public ?array $captionEntities = null;

	/** @var int|null */
	public ?int $videoWidth = null;

	/** @var int|null */
	public ?int $videoHeight = null;

	/** @var int|null */
	public ?int $videoDuration = null;

	/** @var string|null */
	public ?string $description = null;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;

	/** @var InputMessageContent|null */
	public ?InputMessageContent $inputMessageContent = null;
}
