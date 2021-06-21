<?php

namespace Sysbot\Telegram\Types;

class ChatPermissions implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\ChatPermissions;

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

    /** @var bool|null */
    public ?bool $canChangeInfo = null;

    /** @var bool|null */
    public ?bool $canInviteUsers = null;

    /** @var bool|null */
    public ?bool $canPinMessages = null;

}
