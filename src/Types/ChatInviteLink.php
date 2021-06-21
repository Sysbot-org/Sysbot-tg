<?php

namespace Sysbot\Telegram\Types;

class ChatInviteLink implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\ChatInviteLink;

    /** @var string */
    public string $inviteLink;

    /** @var User */
    public User $creator;

    /** @var bool */
    public bool $isPrimary;

    /** @var bool */
    public bool $isRevoked;

    /** @var int|null */
    public ?int $expireDate = null;

    /** @var int|null */
    public ?int $memberLimit = null;
}
