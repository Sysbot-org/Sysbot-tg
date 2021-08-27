<?php

namespace Sysbot\Telegram\Types;

class ChatMemberLeft extends ChatMember
{
	/** @var string */
	public string $status = 'left';

	/** @var User */
	public User $user;
}
