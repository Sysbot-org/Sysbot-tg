<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultGame extends InlineQueryResult
{
	/** @var string */
	public string $type = 'game';

	/** @var string */
	public string $id;

	/** @var string */
	public string $gameShortName;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;
}
