<?php

namespace Sysbot\Telegram\Types;

class ChatMemberUpdated implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\ChatMemberUpdated;

	/** @var Chat */
	public Chat $chat;

	/** @var User */
	public User $from;

	/** @var int */
	public int $date;

	/** @var ChatMember */
	public ChatMember $oldChatMember;

	/** @var ChatMember */
	public ChatMember $newChatMember;

	/** @var ChatInviteLink|null */
	public ?ChatInviteLink $inviteLink = null;
}
