<?php

namespace Sysbot\Telegram\Types;

class ChatMemberOwner extends ChatMember
{
	/** @var string */
	public string $status = 'owner';

	/** @var User */
	public User $user;

	/** @var bool */
	public bool $isAnonymous;

	/** @var string|null */
	public ?string $customTitle = null;
}
