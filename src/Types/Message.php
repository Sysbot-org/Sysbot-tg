<?php

namespace Sysbot\Telegram\Types;


class Message implements TypeInterface
{

    use \Sysbot\Telegram\ExtendedTypes\Message;

    /** @var int */
    public int $messageId;

    /** @var User|null */
    public ?User $from = null;

    /** @var Chat|null */
    public ?Chat $senderChat = null;

    /** @var int */
    public int $date;

    /** @var Chat */
    public Chat $chat;

    /** @var User|null */
    public ?User $forwardFrom = null;

    /** @var Chat|null */
    public ?Chat $forwardFromChat = null;

    /** @var int|null */
    public ?int $forwardFromMessageId = null;

    /** @var string|null */
    public ?string $forwardSignature = null;

    /** @var string|null */
    public ?string $forwardSenderName = null;

    /** @var int|null */
    public ?int $forwardDate = null;

    /** @var Message|null */
    public ?Message $replyToMessage = null;

    /** @var User|null */
    public ?User $viaBot = null;

    /** @var int|null */
    public ?int $editDate = null;

    /** @var string|null */
    public ?string $mediaGroupId = null;

    /** @var string|null */
    public ?string $authorSignature = null;

    /** @var string|null */
    public ?string $text = null;

    /** @var Array<MessageEntity>|null */
    public ?array $entities = null;

    /** @var Animation|null */
    public ?Animation $animation = null;

    /** @var Audio|null */
    public ?Audio $audio = null;

    /** @var Document|null */
    public ?Document $document = null;

    /** @var Array<PhotoSize>|null */
    public ?array $photo = null;

    /** @var Sticker|null */
    public ?Sticker $sticker = null;

    /** @var Video|null */
    public ?Video $video = null;

    /** @var VideoNote|null */
    public ?VideoNote $videoNote = null;

    /** @var Voice|null */
    public ?Voice $voice = null;

    /** @var string|null */
    public ?string $caption = null;

    /** @var Array<MessageEntity>|null */
    public ?array $captionEntities = null;

    /** @var Contact|null */
    public ?Contact $contact = null;

    /** @var Dice|null */
    public ?Dice $dice = null;

    /** @var Game|null */
    public ?Game $game = null;

    /** @var Poll|null */
    public ?Poll $poll = null;

    /** @var Venue|null */
    public ?Venue $venue = null;

    /** @var Location|null */
    public ?Location $location = null;

    /** @var Array<User>|null */
    public ?array $newChatMembers = null;

    /** @var User|null */
    public ?User $leftChatMember = null;

    /** @var string|null */
    public ?string $newChatTitle = null;

    /** @var Array<PhotoSize>|null */
    public ?array $newChatPhoto = null;

    /** @var bool|null */
    public ?bool $deleteChatPhoto = null;

    /** @var bool|null */
    public ?bool $groupChatCreated = null;

    /** @var bool|null */
    public ?bool $supergroupChatCreated = null;

    /** @var bool|null */
    public ?bool $channelChatCreated = null;

    /** @var MessageAutoDeleteTimerChanged|null */
    public ?MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged = null;

    /** @var int|null */
    public ?int $migrateToChatId = null;

    /** @var int|null */
    public ?int $migrateFromChatId = null;

    /** @var Message|null */
    public ?Message $pinnedMessage = null;

    /** @var Invoice|null */
    public ?Invoice $invoice = null;

    /** @var SuccessfulPayment|null */
    public ?SuccessfulPayment $successfulPayment = null;

    /** @var string|null */
    public ?string $connectedWebsite = null;

    /** @var PassportData|null */
    public ?PassportData $passportData = null;

    /** @var ProximityAlertTriggered|null */
    public ?ProximityAlertTriggered $proximityAlertTriggered = null;

    /** @var VoiceChatScheduled|null */
    public ?VoiceChatScheduled $voiceChatScheduled = null;

    /** @var VoiceChatStarted|null */
    public ?VoiceChatStarted $voiceChatStarted = null;

    /** @var VoiceChatEnded|null */
    public ?VoiceChatEnded $voiceChatEnded = null;

    /** @var VoiceChatParticipantsInvited|null */
    public ?VoiceChatParticipantsInvited $voiceChatParticipantsInvited = null;

    /** @var InlineKeyboardMarkup|null */
    public ?InlineKeyboardMarkup $replyMarkup = null;
}
