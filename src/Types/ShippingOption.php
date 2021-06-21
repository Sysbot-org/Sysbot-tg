<?php

namespace Sysbot\Telegram\Types;

class ShippingOption implements TypeInterface
{
	/** @var string */
	public string $id;

	/** @var string */
	public string $title;

	/** @var Array<LabeledPrice> */
	public array $prices;
}
