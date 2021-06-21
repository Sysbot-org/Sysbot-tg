<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait ChatInviteLink
{

    use BaseType;


    public function edit(int|string $chatId, ?int $expireDate = null, ?int $memberLimit = null): PromiseInterface
    {
        return $this->api->editChatInviteLink(
            chatId: $chatId,
            inviteLink: $this->inviteLink,
            expireDate: $expireDate,
            memberLimit: $memberLimit
        );
    }

    public function revoke(int|string $chatId): PromiseInterface
    {
        return $this->api->revokeChatInviteLink(chatId: $chatId, inviteLink: $this->inviteLink);
    }

}