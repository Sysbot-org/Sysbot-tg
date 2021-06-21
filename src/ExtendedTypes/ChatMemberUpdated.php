<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait ChatMemberUpdated
{
    use BaseType;

    public function ban(?int $untilDate = null, ?bool $revokeMessages = null): PromiseInterface
    {
        return $this->api->kickChatMember(
            chatId: $this->chat->id,
            userId: $this->newChatMember->user->id,
            untilDate: $untilDate,
            revokeMessages: $revokeMessages
        );
    }

    public function unban(?bool $onlyIfBanned = null): PromiseInterface
    {
        return $this->api->unbanChatMember(
            chatId: $this->chat->id,
            userId: $this->newChatMember->user->id,
            onlyIfBanned: $onlyIfBanned
        );
    }

    public function promote(
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
            chatId: $this->chat->id,
            userId: $this->newChatMember->user->id,
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

    public function demote(): PromiseInterface
    {
        return $this->promote();
    }

    public function restrict(
        \Sysbot\Telegram\Types\ChatPermissions $permissions,
        ?int $untilDate = null
    ): PromiseInterface {
        return $this->api->restrictChatMember(
            chatId: $this->chat->id,
            userId: $this->newChatMember->user->id,
            permissions: $permissions,
            untilDate: $untilDate
        );
    }

    public function unrestrict(): PromiseInterface
    {
        return $this->promote();
    }

}