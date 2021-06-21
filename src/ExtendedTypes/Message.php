<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;
use Sysbot\Telegram\Types\InlineKeyboardMarkup;
use Sysbot\Telegram\Types\InputMedia;

trait Message
{

    use BaseType;

    public function delete(): PromiseInterface
    {
        return $this->api->deleteMessage(chatId: $this->chat->id, messageId: $this->messageId);
    }

    public function reply(
        string $text,
        string $parseMode = null,
        bool $allowSendingWithoutReply = false
    ): PromiseInterface {
        return $this->api->sendMessage(
            chatId: $this->chat->id,
            text: $text,
            parseMode: $parseMode,
            replyToMessageId: $this->messageId,
            allowSendingWithoutReply: $allowSendingWithoutReply
        );
    }

    public function pin(bool $disableNotification = false): PromiseInterface
    {
        return $this->api->pinChatMessage(
            chatId: $this->chat->id,
            messageId: $this->messageId,
            disableNotification: $disableNotification
        );
    }

    public function unpin(): PromiseInterface
    {
        return $this->api->unpinChatMessage(
            chatId: $this->chat->id,
            messageId: $this->messageId
        );
    }

    public function editText(string $text, string $parseMode = null): PromiseInterface
    {
        return $this->api->editMessageText(
            text: $text,
            chatId: $this->chat->id,
            messageId: $this->messageId,
            parseMode: $parseMode,
        );
    }

    public function editCaption(string $caption): PromiseInterface
    {
        return $this->api->editMessageCaption(chatId: $this->chat->id, messageId: $this->messageId, caption: $caption);
    }

    public function editMedia(InputMedia $media, ?InlineKeyboardMarkup $replyMarkup = null): PromiseInterface
    {
        return $this->api->editMessageMedia(
            media: $media,
            chatId: $this->chat->id,
            messageId: $this->messageId,
            replyMarkup: $replyMarkup
        );
    }

    public function editReplyMarkup(?InlineKeyboardMarkup $replyMarkup = null): PromiseInterface
    {
        return $this->api->editMessageReplyMarkup(
            chatId: $this->chat->id,
            messageId: $this->messageId,
            replyMarkup: $replyMarkup
        );
    }

    public function stopPoll(?InlineKeyboardMarkup $replyMarkup = null): PromiseInterface
    {
        return $this->api->stopPoll(chatId: $this->chat->id, messageId: $this->messageId, replyMarkup: $replyMarkup);
    }

}