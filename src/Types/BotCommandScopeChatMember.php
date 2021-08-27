<?php

namespace Sysbot\Telegram\Types;

class BotCommandScopeChatMember extends BotCommandScope
{
	/** @var string */
	public string $type = 'chat_member';

	/** @var int|string */
	public int|string $chatId;

	/** @var int */
	public int $userId;
}
