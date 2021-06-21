<?php

namespace Sysbot\Telegram\Types;

class Location implements TypeInterface
{
	/** @var float */
	public float $longitude;

	/** @var float */
	public float $latitude;

	/** @var float|null */
	public ?float $horizontalAccuracy = null;

	/** @var int|null */
	public ?int $livePeriod = null;

	/** @var int|null */
	public ?int $heading = null;

	/** @var int|null */
	public ?int $proximityAlertRadius = null;
}
