<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait User
{

    use BaseChat;

    public function ban(int|string $chatId, ?int $untilDate = null, ?bool $revokeMessages = null): PromiseInterface
    {
        return $this->api->kickChatMember(
            chatId: $chatId,
            userId: $this->id,
            untilDate: $untilDate,
            revokeMessages: $revokeMessages
        );
    }

    public function unban(int|string $chatId, ?bool $onlyIfBanned = null): PromiseInterface
    {
        return $this->api->unbanChatMember(
            chatId: $chatId,
            userId: $this->id,
            onlyIfBanned: $onlyIfBanned
        );
    }

    public function promote(
        int|string $chatId,
        ?bool $isAnonymous = null,
        ?bool $canManageChat = null,
        ?bool $canPostMessages = null,
        ?bool $canEditMessages = null,
        ?bool $canDeleteMessages = null,
        ?bool $canManageVoiceChats = null,
        ?bool $canRestrictMembers = null,
        ?bool $canPromoteMembers = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPinMessages = null
    ): PromiseInterface {
        return $this->api->promoteChatMember(
            chatId: $chatId,
            userId: $this->id,
            isAnonymous: $isAnonymous,
            canManageChat: $canManageChat,
            canPostMessages: $canPostMessages,
            canEditMessages: $canEditMessages,
            canDeleteMessages: $canDeleteMessages,
            canManageVoiceChats: $canManageVoiceChats,
            canRestrictMembers: $canRestrictMembers,
            canPromoteMembers: $canPromoteMembers,
            canChangeInfo: $canChangeInfo,
            canInviteUsers: $canInviteUsers,
            canPinMessages: $canPinMessages
        );
    }

    public function demote(int|string $chatId): PromiseInterface
    {
        return $this->promote(chatId: $chatId);
    }

    public function restrict(
        int|string $chatId,
        \Sysbot\Telegram\Types\ChatPermissions $permissions,
        ?int $untilDate = null
    ): PromiseInterface {
        return $this->api->restrictChatMember(
            chatId: $chatId,
            userId: $this->id,
            permissions: $permissions,
            untilDate: $untilDate
        );
    }

    public function unrestrict(int|string $chatId): PromiseInterface
    {
        return $this->promote(chatId: $chatId);
    }

}