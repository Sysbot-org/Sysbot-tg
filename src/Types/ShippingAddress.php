<?php

namespace Sysbot\Telegram\Types;

class ShippingAddress implements TypeInterface
{
	/** @var string */
	public string $countryCode;

	/** @var string */
	public string $state;

	/** @var string */
	public string $city;

	/** @var string */
	public string $streetLine1;

	/** @var string */
	public string $streetLine2;

	/** @var string */
	public string $postCode;
}
