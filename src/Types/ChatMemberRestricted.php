<?php

namespace Sysbot\Telegram\Types;

class ChatMemberRestricted extends ChatMember
{
	/** @var string */
	public string $status;

	/** @var User */
	public User $user;

	/** @var bool */
	public bool $isMember;

	/** @var bool */
	public bool $canChangeInfo;

	/** @var bool */
	public bool $canInviteUsers;

	/** @var bool */
	public bool $canPinMessages;

	/** @var bool */
	public bool $canSendMessages;

	/** @var bool */
	public bool $canSendMediaMessages;

	/** @var bool */
	public bool $canSendPolls;

	/** @var bool */
	public bool $canSendOtherMessages;

	/** @var bool */
	public bool $canAddWebPagePreviews;

	/** @var int */
	public int $untilDate;
}
