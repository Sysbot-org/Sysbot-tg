<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultPhoto implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string */
	public string $id;

	/** @var string */
	public string $photoUrl;

	/** @var string */
	public string $thumbUrl;

	/** @var int|null */
	public ?int $photoWidth = null;

	/** @var int|null */
	public ?int $photoHeight = null;

	/** @var string|null */
	public ?string $title = null;

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
