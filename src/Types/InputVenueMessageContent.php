<?php

namespace Sysbot\Telegram\Types;

class InputVenueMessageContent implements TypeInterface
{
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
}
