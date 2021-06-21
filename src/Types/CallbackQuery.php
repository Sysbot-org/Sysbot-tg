<?php

namespace Sysbot\Telegram\Types;

class CallbackQuery implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\CallbackQuery;

    /** @var string */
    public string $id;

    /** @var User */
    public User $from;

    /** @var Message|null */
    public ?Message $message = null;

    /** @var string|null */
    public ?string $inlineMessageId = null;

    /** @var string */
    public string $chatInstance;

    /** @var string|null */
    public ?string $data = null;

    /** @var string|null */
    public ?string $gameShortName = null;
}
