<?php

namespace Sysbot\Telegram\Types;

class PollAnswer implements TypeInterface
{
	/** @var string */
	public string $pollId;

	/** @var User */
	public User $user;

	/** @var Array<int> */
	public array $optionIds;
}
