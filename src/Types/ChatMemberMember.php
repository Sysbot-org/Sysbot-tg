<?php

namespace Sysbot\Telegram\Types;

class ChatMemberMember extends ChatMember
{
	/** @var string */
	public string $status;

	/** @var User */
	public User $user;
}
