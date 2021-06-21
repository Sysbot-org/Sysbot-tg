<?php

namespace Sysbot\Telegram\Types;

class GameHighScore implements TypeInterface
{
	/** @var int */
	public int $position;

	/** @var User */
	public User $user;

	/** @var int */
	public int $score;
}
