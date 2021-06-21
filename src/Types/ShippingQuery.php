<?php

namespace Sysbot\Telegram\Types;

class ShippingQuery implements TypeInterface
{
	/** @var string */
	public string $id;

	/** @var User */
	public User $from;

	/** @var string */
	public string $invoicePayload;

	/** @var ShippingAddress */
	public ShippingAddress $shippingAddress;
}
