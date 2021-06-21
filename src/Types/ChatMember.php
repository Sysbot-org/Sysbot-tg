<?php

namespace Sysbot\Telegram\Types;

class ChatMember implements TypeInterface
{

    /** @var User */
    public User $user;

    /** @var string */
    public string $status;

    /** @var string|null */
    public ?string $customTitle = null;

    /** @var bool|null */
    public ?bool $isAnonymous = null;

    /** @var bool|null */
    public ?bool $canBeEdited = null;

    /** @var bool|null */
    public ?bool $canManageChat = null;

    /** @var bool|null */
    public ?bool $canPostMessages = null;

    /** @var bool|null */
    public ?bool $canEditMessages = null;

    /** @var bool|null */
    public ?bool $canDeleteMessages = null;

    /** @var bool|null */
    public ?bool $canManageVoiceChats = null;

    /** @var bool|null */
    public ?bool $canRestrictMembers = null;

    /** @var bool|null */
    public ?bool $canPromoteMembers = null;

    /** @var bool|null */
    public ?bool $canChangeInfo = null;

    /** @var bool|null */
    public ?bool $canInviteUsers = null;

    /** @var bool|null */
    public ?bool $canPinMessages = null;

    /** @var bool|null */
    public ?bool $isMember = null;

    /** @var bool|null */
    public ?bool $canSendMessages = null;

    /** @var bool|null */
    public ?bool $canSendMediaMessages = null;

    /** @var bool|null */
    public ?bool $canSendPolls = null;

    /** @var bool|null */
    public ?bool $canSendOtherMessages = null;

    /** @var bool|null */
    public ?bool $canAddWebPagePreviews = null;

    /** @var int|null */
    public ?int $untilDate = null;
}
