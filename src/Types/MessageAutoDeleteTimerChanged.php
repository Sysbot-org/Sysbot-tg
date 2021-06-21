<?php

namespace Sysbot\Telegram\Types;

class MessageAutoDeleteTimerChanged implements TypeInterface
{
	/** @var int */
	public int $messageAutoDeleteTime;
}
