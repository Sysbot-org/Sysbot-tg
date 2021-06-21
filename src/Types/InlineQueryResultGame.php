<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultGame implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string */
	public string $id;

	/** @var string */
	public string $gameShortName;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;
}
