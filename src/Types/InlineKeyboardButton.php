<?php

namespace Sysbot\Telegram\Types;

class InlineKeyboardButton implements TypeInterface
{
	/** @var string */
	public string $text;

	/** @var string|null */
	public ?string $url = null;

	/** @var LoginUrl|null */
	public ?LoginUrl $loginUrl = null;

	/** @var string|null */
	public ?string $callbackData = null;

	/** @var string|null */
	public ?string $switchInlineQuery = null;

	/** @var string|null */
	public ?string $switchInlineQueryCurrentChat = null;

	/** @var CallbackGame|null */
	public ?CallbackGame $callbackGame = null;

	/** @var bool|null */
	public ?bool $pay = null;
}
