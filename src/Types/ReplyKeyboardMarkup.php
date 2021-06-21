<?php

namespace Sysbot\Telegram\Types;

class ReplyKeyboardMarkup implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\ReplyKeyboardMarkup;

    /** @var Array<Array<KeyboardButton>> */
    public array $keyboard;

    /** @var bool|null */
    public ?bool $resizeKeyboard = null;

    /** @var bool|null */
    public ?bool $oneTimeKeyboard = null;

    /** @var bool|null */
    public ?bool $selective = null;
}
