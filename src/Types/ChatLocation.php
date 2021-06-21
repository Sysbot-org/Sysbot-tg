<?php

namespace Sysbot\Telegram\Types;

class ChatLocation implements TypeInterface
{
	/** @var Location */
	public Location $location;

	/** @var string */
	public string $address;
}
