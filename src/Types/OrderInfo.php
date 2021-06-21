<?php

namespace Sysbot\Telegram\Types;

class OrderInfo implements TypeInterface
{
	/** @var string|null */
	public ?string $name = null;

	/** @var string|null */
	public ?string $phoneNumber = null;

	/** @var string|null */
	public ?string $email = null;

	/** @var ShippingAddress|null */
	public ?ShippingAddress $shippingAddress = null;
}
