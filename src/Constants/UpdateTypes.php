<?php


namespace Sysbot\Telegram\Constants;


/**
 * Class UpdateTypes
 * @package Sysbot\Telegram\Constants
 */
class UpdateTypes
{

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     */
    public const MESSAGE = 1;
    /**
     * New version of a message that is known to the bot and was edited.
     */
    public const EDITED_MESSAGE = 2;
    /**
     * New incoming channel post of any kind — text, photo, sticker, etc.
     */
    public const CHANNEL_POST = 4;
    /**
     * New version of a channel post that is known to the bot and was edited.
     */
    public const EDITED_CHANNEL_POST = 8;
    /**
     * New incoming inline query.
     */
    public const INLINE_QUERY = 16;
    /**
     * The result of an inline query that was chosen by a user and sent to their chat partner.
     */
    public const CHOSEN_INLINE_RESULT = 32;
    /**
     * New incoming callback query.
     */
    public const CALLBACK_QUERY = 64;
    /**
     * New incoming shipping query. Only for invoices with flexible price.
     */
    public const SHIPPING_QUERY = 128;
    /**
     * New incoming pre-checkout query. Contains full information about checkout.
     */
    public const PRE_CHECKOUT_QUERY = 256;
    /**
     * New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot.
     */
    public const POLL = 512;
    /**
     * A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    public const POLL_ANSWER = 1024;
    /**
     * The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    public const MY_CHAT_MEMBER = 2048;
    /**
     * A chat member's status was updated in a chat.
     */
    public const CHAT_MEMBER = 4096;

    /**
     * All update types.
     */
    public const TYPES_MAP = [
        self::MESSAGE => 'message',
        self::EDITED_MESSAGE => 'edited_message',
        self::CHANNEL_POST => 'channel_post',
        self::EDITED_CHANNEL_POST => 'edited_channel_post',
        self::INLINE_QUERY => 'inline_query',
        self::CHOSEN_INLINE_RESULT => 'chosen_inline_result',
        self::CALLBACK_QUERY => 'callback_query',
        self::SHIPPING_QUERY => 'shipping_query',
        self::PRE_CHECKOUT_QUERY => 'pre_checkout_query',
        self::POLL => 'poll',
        self::POLL_ANSWER => 'poll_answer',
        self::MY_CHAT_MEMBER => 'my_chat_member',
        self::CHAT_MEMBER => 'chat_member'
    ];

    /**
     * @param int $types
     * @return array
     */
    public static function getAllowedTypes(int $types): array
    {
        $result = [];
        foreach (self::TYPES_MAP as $flag => $type) {
            if ($types & $flag) {
                $result[] = $type;
            }
        }
        return $result;
    }

    public static function getAllTypes(): array
    {
        return array_values(self::TYPES_MAP);
    }

}