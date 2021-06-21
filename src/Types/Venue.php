<?php

namespace Sysbot\Telegram\Types;

class Venue implements TypeInterface
{
	/** @var Location */
	public Location $location;

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
