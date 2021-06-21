<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait Chat
{
    use BaseChat;

    public function leave(): PromiseInterface
    {
        return $this->api->leaveChat($this->id);
    }

    public function kickMember(int $userId, ?int $untilDate = null, ?bool $revokeMessages = null): PromiseInterface
    {
        return $this->api->kickChatMember(
            chatId: $this->id,
            userId: $userId,
            untilDate: $untilDate,
            revokeMessages: $revokeMessages
        );
    }

    public function unbanMember(int $userId, ?bool $onlyIfBanned = null): PromiseInterface
    {
        return $this->api->unbanChatMember(chatId: $this->id, userId: $userId, onlyIfBanned: $onlyIfBanned);
    }

    public function restrictMember(
        int $userId,
        \Sysbot\Telegram\Types\ChatPermissions $permissions,
        ?int $untilDate = null
    ): PromiseInterface {
        return $this->api->restrictChatMember(
            chatId: $this->id,
            userId: $userId,
            permissions: $permissions,
            untilDate: $untilDate
        );
    }
}