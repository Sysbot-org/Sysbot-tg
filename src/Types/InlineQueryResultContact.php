<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultContact extends InlineQueryResult
{
	/** @var string */
	public string $type = 'contact';

	/** @var string */
	public string $id;

	/** @var string */
	public string $phoneNumber;

	/** @var string */
	public string $firstName;

	/** @var string|null */
	public ?string $lastName = null;

	/** @var string|null */
	public ?string $vcard = null;

	/** @var InlineKeyboardMarkup|null */
	public ?InlineKeyboardMarkup $replyMarkup = null;

	/** @var InputMessageContent|null */
	public ?InputMessageContent $inputMessageContent = null;

	/** @var string|null */
	public ?string $thumbUrl = null;

	/** @var int|null */
	public ?int $thumbWidth = null;

	/** @var int|null */
	public ?int $thumbHeight = null;
}
