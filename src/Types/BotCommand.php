<?php

namespace Sysbot\Telegram\Types;

class BotCommand implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\BotCommand;

    /** @var string */
    public string $command;

    /** @var string */
    public string $description;
}
