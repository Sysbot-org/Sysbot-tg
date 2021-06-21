<?php

namespace Sysbot\Telegram\Types;

class Chat implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\Chat;

    /** @var int */
    public int $id;

    /** @var string */
    public string $type;

    /** @var string|null */
    public ?string $title = null;

    /** @var string|null */
    public ?string $username = null;

    /** @var string|null */
    public ?string $firstName = null;

    /** @var string|null */
    public ?string $lastName = null;

    /** @var ChatPhoto|null */
    public ?ChatPhoto $photo = null;

    /** @var string|null */
    public ?string $bio = null;

    /** @var string|null */
    public ?string $description = null;

    /** @var string|null */
    public ?string $inviteLink = null;

    /** @var Message|null */
    public ?Message $pinnedMessage = null;

    /** @var ChatPermissions|null */
    public ?ChatPermissions $permissions = null;

    /** @var int|null */
    public ?int $slowModeDelay = null;

    /** @var int|null */
    public ?int $messageAutoDeleteTime = null;

    /** @var string|null */
    public ?string $stickerSetName = null;

    /** @var bool|null */
    public ?bool $canSetStickerSet = null;

    /** @var int|null */
    public ?int $linkedChatId = null;

    /** @var ChatLocation|null */
    public ?ChatLocation $location = null;
}
