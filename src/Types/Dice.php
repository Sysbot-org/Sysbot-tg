<?php

namespace Sysbot\Telegram\Types;

class Dice implements TypeInterface
{
	/** @var string */
	public string $emoji;

	/** @var int */
	public int $value;
}
