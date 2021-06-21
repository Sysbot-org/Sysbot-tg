<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultVenue implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string */
	public string $id;

	/** @var float */
	public float $latitude;

	/** @var float */
	public float $longitude;

	/** @var string */
	public string $title;

	/** @var string */
	public string $address;

	/** @var string|null */
	public ?string $foursquareId = null;

	/** @var string|null */
	public ?string $foursquareType = null;

	/** @var string|null */
	public ?string $googlePlaceId = null;

	/** @var string|null */
	public ?string $googlePlaceType = null;

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
