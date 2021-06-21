<?php

namespace Sysbot\Telegram\Types;

class InlineKeyboardMarkup implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\InlineKeyboardMarkup;

    /** @var Array<Array<InlineKeyboardButton>> */
    public array $inlineKeyboard;
}
