<?php

namespace Sysbot\Telegram\Types;

class ChatMemberAdministrator extends ChatMember
{
	/** @var string */
	public string $status = 'administrator';

	/** @var User */
	public User $user;

	/** @var bool */
	public bool $canBeEdited;

	/** @var bool */
	public bool $isAnonymous;

	/** @var bool */
	public bool $canManageChat;

	/** @var bool */
	public bool $canDeleteMessages;

	/** @var bool */
	public bool $canManageVoiceChats;

	/** @var bool */
	public bool $canRestrictMembers;

	/** @var bool */
	public bool $canPromoteMembers;

	/** @var bool */
	public bool $canChangeInfo;

	/** @var bool */
	public bool $canInviteUsers;

	/** @var bool|null */
	public ?bool $canPostMessages = null;

	/** @var bool|null */
	public ?bool $canEditMessages = null;

	/** @var bool|null */
	public ?bool $canPinMessages = null;

	/** @var string|null */
	public ?string $customTitle = null;
}
