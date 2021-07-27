<?php

/**
 * @noinspection PhpUnused
 * @noinspection PhpUnusedParameterInspection
 */

namespace Sysbot\Telegram;

use GuzzleHttp\Promise\PromiseInterface;
use Sysbot\Telegram\Types\BotCommandScope;
use Sysbot\Telegram\Types\ChatPermissions;
use Sysbot\Telegram\Types\ForceReply;
use Sysbot\Telegram\Types\InlineKeyboardMarkup;
use Sysbot\Telegram\Types\InputFile;
use Sysbot\Telegram\Types\InputMedia;
use Sysbot\Telegram\Types\MaskPosition;
use Sysbot\Telegram\Types\ReplyKeyboardMarkup;
use Sysbot\Telegram\Types\ReplyKeyboardRemove;

trait BaseAPI
{
    abstract public function sendRequest(string $method, array $args): mixed;


    public function getUpdates(
        ?int $offset = null,
        ?int $limit = null,
        ?int $timeout = null,
        ?array $allowedUpdates = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setWebhook(
        string $url,
        ?InputFile $certificate = null,
        ?string $ipAddress = null,
        ?int $maxConnections = null,
        ?array $allowedUpdates = null,
        ?bool $dropPendingUpdates = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteWebhook(?bool $dropPendingUpdates = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getWebhookInfo(): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getMe(): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function logOut(): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function close(): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendMessage(
        int|string $chatId,
        string $text,
        ?string $parseMode = null,
        ?array $entities = null,
        ?bool $disableWebPagePreview = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function forwardMessage(
        int|string $chatId,
        int|string $fromChatId,
        int $messageId,
        ?bool $disableNotification = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function copyMessage(
        int|string $chatId,
        int|string $fromChatId,
        int $messageId,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendPhoto(
        int|string $chatId,
        InputFile|string $photo,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendAudio(
        int|string $chatId,
        InputFile|string $audio,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        InputFile|string|null $thumb = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendDocument(
        int|string $chatId,
        InputFile|string $document,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableContentTypeDetection = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendVideo(
        int|string $chatId,
        InputFile|string $video,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $supportsStreaming = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendAnimation(
        int|string $chatId,
        InputFile|string $animation,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendVoice(
        int|string $chatId,
        InputFile|string $voice,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $duration = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendVideoNote(
        int|string $chatId,
        InputFile|string $videoNote,
        ?int $duration = null,
        ?int $length = null,
        InputFile|string|null $thumb = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendMediaGroup(
        int|string $chatId,
        array $media,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendLocation(
        int|string $chatId,
        float $latitude,
        float $longitude,
        ?float $horizontalAccuracy = null,
        ?int $livePeriod = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?float $horizontalAccuracy = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function stopMessageLiveLocation(
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendVenue(
        int|string $chatId,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?string $googlePlaceId = null,
        ?string $googlePlaceType = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendContact(
        int|string $chatId,
        string $phoneNumber,
        string $firstName,
        ?string $lastName = null,
        ?string $vcard = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendPoll(
        int|string $chatId,
        string $question,
        array $options,
        ?bool $isAnonymous = null,
        ?string $type = null,
        ?bool $allowsMultipleAnswers = null,
        ?int $correctOptionId = null,
        ?string $explanation = null,
        ?string $explanationParseMode = null,
        ?array $explanationEntities = null,
        ?int $openPeriod = null,
        ?int $closeDate = null,
        ?bool $isClosed = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendDice(
        int|string $chatId,
        ?string $emoji = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendChatAction(int|string $chatId, string $action): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getUserProfilePhotos(int $userId, ?int $offset = null, ?int $limit = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getFile(string $fileId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function banChatMember(
        int|string $chatId,
        int $userId,
        ?int $untilDate = null,
        ?bool $revokeMessages = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function unbanChatMember(int|string $chatId, int $userId, ?bool $onlyIfBanned = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function restrictChatMember(
        int|string $chatId,
        int $userId,
        ChatPermissions $permissions,
        ?int $untilDate = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function promoteChatMember(
        int|string $chatId,
        int $userId,
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
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatAdministratorCustomTitle(int|string $chatId, int $userId, string $customTitle): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatPermissions(int|string $chatId, ChatPermissions $permissions): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function exportChatInviteLink(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function createChatInviteLink(
        int|string $chatId,
        ?int $expireDate = null,
        ?int $memberLimit = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editChatInviteLink(
        int|string $chatId,
        string $inviteLink,
        ?int $expireDate = null,
        ?int $memberLimit = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function revokeChatInviteLink(int|string $chatId, string $inviteLink): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatPhoto(int|string $chatId, InputFile $photo): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteChatPhoto(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatTitle(int|string $chatId, string $title): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatDescription(int|string $chatId, ?string $description = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function pinChatMessage(int|string $chatId, int $messageId, ?bool $disableNotification = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function unpinChatMessage(int|string $chatId, ?int $messageId = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function unpinAllChatMessages(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function leaveChat(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getChat(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getChatAdministrators(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getChatMemberCount(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getChatMember(int|string $chatId, int $userId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setChatStickerSet(int|string $chatId, string $stickerSetName): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteChatStickerSet(int|string $chatId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function answerCallbackQuery(
        string $callbackQueryId,
        ?string $text = null,
        ?bool $showAlert = null,
        ?string $url = null,
        ?int $cacheTime = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setMyCommands(array $commands, ?BotCommandScope $scope = null, ?string $languageCode = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $languageCode = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getMyCommands(?BotCommandScope $scope = null, ?string $languageCode = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editMessageText(
        string $text,
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $parseMode = null,
        ?array $entities = null,
        ?bool $disableWebPagePreview = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editMessageCaption(
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editMessageMedia(
        InputMedia $media,
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function editMessageReplyMarkup(
        int|string|null $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function stopPoll(int|string $chatId, int $messageId, ?InlineKeyboardMarkup $replyMarkup = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteMessage(int|string $chatId, int $messageId): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendSticker(
        int|string $chatId,
        InputFile|string $sticker,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getStickerSet(string $name): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function uploadStickerFile(int $userId, InputFile $pngSticker): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function createNewStickerSet(
        int $userId,
        string $name,
        string $title,
        string $emojis,
        InputFile|string|null $pngSticker = null,
        ?InputFile $tgsSticker = null,
        ?bool $containsMasks = null,
        ?MaskPosition $maskPosition = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function addStickerToSet(
        int $userId,
        string $name,
        string $emojis,
        InputFile|string|null $pngSticker = null,
        ?InputFile $tgsSticker = null,
        ?MaskPosition $maskPosition = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setStickerPositionInSet(string $sticker, int $position): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function deleteStickerFromSet(string $sticker): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setStickerSetThumb(string $name, int $userId, InputFile|string|null $thumb = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function answerInlineQuery(
        string $inlineQueryId,
        array $results,
        ?int $cacheTime = null,
        ?bool $isPersonal = null,
        ?string $nextOffset = null,
        ?string $switchPmText = null,
        ?string $switchPmParameter = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendInvoice(
        int|string $chatId,
        string $title,
        string $description,
        string $payload,
        string $providerToken,
        string $currency,
        array $prices,
        ?int $maxTipAmount = null,
        ?array $suggestedTipAmounts = null,
        ?string $startParameter = null,
        ?string $providerData = null,
        ?string $photoUrl = null,
        ?int $photoSize = null,
        ?int $photoWidth = null,
        ?int $photoHeight = null,
        ?bool $needName = null,
        ?bool $needPhoneNumber = null,
        ?bool $needEmail = null,
        ?bool $needShippingAddress = null,
        ?bool $sendPhoneNumberToProvider = null,
        ?bool $sendEmailToProvider = null,
        ?bool $isFlexible = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function answerShippingQuery(
        string $shippingQueryId,
        bool $ok,
        ?array $shippingOptions = null,
        ?string $errorMessage = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function answerPreCheckoutQuery(string $preCheckoutQueryId, bool $ok, ?string $errorMessage = null): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setPassportDataErrors(int $userId, array $errors): PromiseInterface
    {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function sendGame(
        int $chatId,
        string $gameShortName,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function setGameScore(
        int $userId,
        int $score,
        ?bool $force = null,
        ?bool $disableEditMessage = null,
        ?int $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }


    public function getGameHighScores(
        int $userId,
        ?int $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null
    ): PromiseInterface {
        $args = get_defined_vars();
        return $this->sendRequest(__FUNCTION__, $args);
    }
}
