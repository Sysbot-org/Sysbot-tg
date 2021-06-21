<?php

namespace Sysbot\Telegram\Types;

class PreCheckoutQuery implements TypeInterface
{
	/** @var string */
	public string $id;

	/** @var User */
	public User $from;

	/** @var string */
	public string $currency;

	/** @var int */
	public int $totalAmount;

	/** @var string */
	public string $invoicePayload;

	/** @var string|null */
	public ?string $shippingOptionId = null;

	/** @var OrderInfo|null */
	public ?OrderInfo $orderInfo = null;
}
