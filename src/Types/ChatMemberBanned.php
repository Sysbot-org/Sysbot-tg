<?php

namespace Sysbot\Telegram\Types;

class ChatMemberBanned extends ChatMember
{
	/** @var string */
	public string $status = 'kicked';

	/** @var User */
	public User $user;

	/** @var int */
	public int $untilDate;
}
