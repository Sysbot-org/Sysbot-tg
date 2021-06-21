<?php

namespace Sysbot\Telegram\Types;

class PollOption implements TypeInterface
{
	/** @var string */
	public string $text;

	/** @var int */
	public int $voterCount;
}
