<?php

namespace Sysbot\Telegram\Types;

class VoiceChatParticipantsInvited implements TypeInterface
{
	/** @var Array<User>|null */
	public ?array $users = null;
}
