<?php

namespace Sysbot\Telegram\Types;

class BotCommandScopeChatAdministrators extends BotCommandScope
{
	/** @var string */
	public string $type;

	/** @var int|string */
	public int|string $chatId;
}
