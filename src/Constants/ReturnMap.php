<?php

namespace Sysbot\Telegram\Constants;

use Sysbot\Telegram\Types\BotCommand;
use Sysbot\Telegram\Types\Chat;
use Sysbot\Telegram\Types\ChatInviteLink;
use Sysbot\Telegram\Types\ChatMember;
use Sysbot\Telegram\Types\File;
use Sysbot\Telegram\Types\GameHighScore;
use Sysbot\Telegram\Types\Message;
use Sysbot\Telegram\Types\MessageId;
use Sysbot\Telegram\Types\Poll;
use Sysbot\Telegram\Types\StickerSet;
use Sysbot\Telegram\Types\Update;
use Sysbot\Telegram\Types\User;
use Sysbot\Telegram\Types\UserProfilePhotos;
use Sysbot\Telegram\Types\WebhookInfo;

class ReturnMap
{

    public const MAP = [
        'getUpdates' => [Update::class],
        'getWebhookInfo' => [WebhookInfo::class],
        'getMe' => [User::class],
        'sendMessage' => [Message::class],
        'forwardMessage' => [Message::class],
        'copyMessage' => [MessageId::class],
        'sendPhoto' => [Message::class],
        'sendAudio' => [Message::class],
        'sendDocument' => [Message::class],
        'sendVideo' => [Message::class],
        'sendAnimation' => [Message::class],
        'sendVoice' => [Message::class],
        'sendVideoNote' => [Message::class],
        'sendMediaGroup' => [Message::class],
        'sendLocation' => [Message::class],
        'editMessageLiveLocation' => [Message::class],
        'stopMessageLiveLocation' => [Message::class],
        'sendVenue' => [Message::class],
        'sendContact' => [Message::class],
        'sendPoll' => [Message::class],
        'sendDice' => [Message::class],
        'getUserProfilePhotos' => [UserProfilePhotos::class],
        'getFile' => [File::class],
        'createChatInviteLink' => [ChatInviteLink::class],
        'editChatInviteLink' => [ChatInviteLink::class],
        'revokeChatInviteLink' => [ChatInviteLink::class],
        'getChat' => [Chat::class],
        'getChatAdministrators' => [ChatMember::class],
        'getChatMember' => [ChatMember::class],
        'getMyCommands' => [BotCommand::class],
        'editMessageText' => [Message::class],
        'editMessageCaption' => [Message::class],
        'editMessageMedia' => [Message::class],
        'editMessageReplyMarkup' => [Message::class],
        'stopPoll' => [Poll::class],
        'sendSticker' => [Message::class],
        'getStickerSet' => [StickerSet::class],
        'uploadStickerFile' => [File::class],
        'sendInvoice' => [Message::class],
        'sendGame' => [Message::class],
        'setGameScore' => [Message::class],
        'getGameHighScores' => [GameHighScore::class]
    ];

}