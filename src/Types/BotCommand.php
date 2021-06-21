<?php

namespace Sysbot\Telegram\Types;

class BotCommand implements TypeInterface
{
	/** @var string */
	public string $command;

	/** @var string */
	public string $description;
}
