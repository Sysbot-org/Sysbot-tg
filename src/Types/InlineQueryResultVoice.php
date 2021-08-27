<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultVoice extends InlineQueryResult
{
	/** @var string */
	public string $type = 'voice';

	/** @var string */
	public string $id;

	/** @var string */
	public string $voiceUrl;

	/** @var string */
	public string $title;

	/** @var string|null */
	public ?string $caption = null;

	/** @var string|null */
	public ?string $parseMode = null;

	/** @var Array<MessageEntity>|null */
	public ?array $captionEntities = null;

	/** @var int|null */
	public ?int $voiceDuration = null;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;

	/** @var InputMessageContent|null */
	public ?InputMessageContent $inputMessageContent = null;
}
