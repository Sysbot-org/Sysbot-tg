<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultArticle implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string */
	public string $id;

	/** @var string */
	public string $title;

	/** @var InputMessageContent */
	public InputMessageContent $inputMessageContent;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;

	/** @var string|null */
	public ?string $url = null;

	/** @var bool|null */
	public ?bool $hideUrl = null;

	/** @var string|null */
	public ?string $description = null;

	/** @var string|null */
	public ?string $thumbUrl = null;

	/** @var int|null */
	public ?int $thumbWidth = null;

	/** @var int|null */
	public ?int $thumbHeight = null;
}
