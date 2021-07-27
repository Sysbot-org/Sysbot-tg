<?php


namespace Sysbot\Telegram\Constants;


use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Sysbot\Telegram\API;
use Sysbot\Telegram\Types\Animation;
use Sysbot\Telegram\Types\Audio;
use Sysbot\Telegram\Types\BotCommand;
use Sysbot\Telegram\Types\CallbackQuery;
use Sysbot\Telegram\Types\Chat;
use Sysbot\Telegram\Types\ChatInviteLink;
use Sysbot\Telegram\Types\ChatMemberUpdated;
use Sysbot\Telegram\Types\ChatPermissions;
use Sysbot\Telegram\Types\ChatPhoto;
use Sysbot\Telegram\Types\Document;
use Sysbot\Telegram\Types\InlineQueryResultCachedAudio;
use Sysbot\Telegram\Types\InlineQueryResultCachedDocument;
use Sysbot\Telegram\Types\InlineQueryResultCachedGif;
use Sysbot\Telegram\Types\InlineQueryResultCachedMpeg4Gif;
use Sysbot\Telegram\Types\InlineQueryResultCachedPhoto;
use Sysbot\Telegram\Types\InlineQueryResultCachedSticker;
use Sysbot\Telegram\Types\InlineQueryResultCachedVideo;
use Sysbot\Telegram\Types\InlineQueryResultCachedVoice;
use Sysbot\Telegram\Types\Message;
use Sysbot\Telegram\Types\PassportFile;
use Sysbot\Telegram\Types\PhotoSize;
use Sysbot\Telegram\Types\Sticker;
use Sysbot\Telegram\Types\User;
use Sysbot\Telegram\Types\Video;
use Sysbot\Telegram\Types\VideoNote;
use Sysbot\Telegram\Types\Voice;

class ApiClasses
{

    public const API_CLASSES = [
        Animation::class,
        Audio::class,
        ChatPhoto::class,
        Document::class,
        PassportFile::class,
        PhotoSize::class,
        Sticker::class,
        Video::class,
        VideoNote::class,
        Voice::class,
        InlineQueryResultCachedAudio::class,
        InlineQueryResultCachedDocument::class,
        InlineQueryResultCachedGif::class,
        InlineQueryResultCachedMpeg4Gif::class,
        InlineQueryResultCachedPhoto::class,
        InlineQueryResultCachedSticker::class,
        InlineQueryResultCachedVideo::class,
        InlineQueryResultCachedVoice::class,
        BotCommand::class,
        CallbackQuery::class,
        Chat::class,
        ChatInviteLink::class,
        ChatMemberUpdated::class,
        ChatPermissions::class,
        Message::class,
        User::class
    ];

    public static function buildArgs(API $api): array
    {
        $args = [];
        foreach (self::API_CLASSES as $apiClass) {
            $args[AbstractNormalizer::DEFAULT_CONSTRUCTOR_ARGUMENTS][$apiClass] = ['api' => $api];
        }
        return $args;
    }

}