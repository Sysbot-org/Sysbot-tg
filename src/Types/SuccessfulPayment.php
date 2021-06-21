<?php

namespace Sysbot\Telegram\Types;

class SuccessfulPayment implements TypeInterface
{
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

	/** @var string */
	public string $telegramPaymentChargeId;

	/** @var string */
	public string $providerPaymentChargeId;
}
