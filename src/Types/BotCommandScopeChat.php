<?php

namespace Sysbot\Telegram\Types;

class BotCommandScopeChat extends BotCommandScope
{
	/** @var string */
	public string $type = 'chat';

	/** @var int|string */
	public int|string $chatId;
}
