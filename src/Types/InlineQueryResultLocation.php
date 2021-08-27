<?php

namespace Sysbot\Telegram\Types;

class InlineQueryResultLocation extends InlineQueryResult
{
	/** @var string */
	public string $type = 'location';

	/** @var string */
	public string $id;

	/** @var float */
	public float $latitude;

	/** @var float */
	public float $longitude;

	/** @var string */
	public string $title;

	/** @var float|null */
	public ?float $horizontalAccuracy = null;

	/** @var int|null */
	public ?int $livePeriod = null;

	/** @var int|null */
	public ?int $heading = null;

	/** @var int|null */
	public ?int $proximityAlertRadius = null;

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
