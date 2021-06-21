<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;
use Sysbot\Telegram\Types\ForceReply;
use Sysbot\Telegram\Types\InlineKeyboardMarkup;
use Sysbot\Telegram\Types\ReplyKeyboardMarkup;
use Sysbot\Telegram\Types\ReplyKeyboardRemove;

trait BaseChat
{

    use BaseType;

    public function sendMessage(
        string $text,
        ?string $parseMode = null,
        ?array $entities = null,
        ?bool $disableWebPagePreview = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        return $this->api->sendMessage(
            chatId: $this->id,
            text: $text,
            parseMode: $parseMode,
            entities: $entities,
            disableWebPagePreview: $disableWebPagePreview,
            disableNotification: $disableNotification,
            replyToMessageId: $replyToMessageId,
            allowSendingWithoutReply: $allowSendingWithoutReply,
            replyMarkup: $replyMarkup
        );
    }

}