<?php

namespace Sysbot\Telegram\Types;

class BotCommandScopeChatAdministrators extends BotCommandScope
{
	/** @var string */
	public string $type = 'chat_administrators';

	/** @var int|string */
	public int|string $chatId;
}
