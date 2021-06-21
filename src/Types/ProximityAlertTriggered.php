<?php

namespace Sysbot\Telegram\Types;

class ProximityAlertTriggered implements TypeInterface
{
	/** @var User */
	public User $traveler;

	/** @var User */
	public User $watcher;

	/** @var int */
	public int $distance;
}
