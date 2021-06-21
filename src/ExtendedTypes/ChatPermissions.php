<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait ChatPermissions
{

    use BaseType;

    public function applyOn(int|string $chatId, ?int $userId = null, ?int $untilDate = null): PromiseInterface
    {
        /** @var \Sysbot\Telegram\Types\ChatPermissions $this */
        if (empty($userId)) {
            return $this->api->setChatPermissions(chatId: $chatId, permissions: $this);
        }
        return $this->api->restrictChatMember(
            chatId: $chatId,
            userId: $userId,
            permissions: $this,
            untilDate: $untilDate
        );
    }

}