<?php

namespace Sysbot\Telegram\Types;

class InputLocationMessageContent implements TypeInterface
{
	/** @var float */
	public float $latitude;

	/** @var float */
	public float $longitude;

	/** @var float|null */
	public ?float $horizontalAccuracy = null;

	/** @var int|null */
	public ?int $livePeriod = null;

	/** @var int|null */
	public ?int $heading = null;

	/** @var int|null */
	public ?int $proximityAlertRadius = null;
}
