<?php

namespace Sysbot\Telegram\Types;

class User implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\User;

    /** @var int */
    public int $id;

    /** @var bool */
    public bool $isBot;

    /** @var string */
    public string $firstName;

    /** @var string|null */
    public ?string $lastName = null;

    /** @var string|null */
    public ?string $username = null;

    /** @var string|null */
    public ?string $languageCode = null;

    /** @var bool|null */
    public ?bool $canJoinGroups = null;

    /** @var bool|null */
    public ?bool $canReadAllGroupMessages = null;

    /** @var bool|null */
    public ?bool $supportsInlineQueries = null;
}
