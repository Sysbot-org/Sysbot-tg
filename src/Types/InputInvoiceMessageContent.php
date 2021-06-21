<?php

namespace Sysbot\Telegram\Types;

class InputInvoiceMessageContent implements TypeInterface
{
	/** @var string */
	public string $title;

	/** @var string */
	public string $description;

	/** @var string */
	public string $payload;

	/** @var string */
	public string $providerToken;

	/** @var string */
	public string $currency;

	/** @var Array<LabeledPrice> */
	public array $prices;

	/** @var int|null */
	public ?int $maxTipAmount = null;

	/** @var Array<int>|null */
	public ?array $suggestedTipAmounts = null;

	/** @var string|null */
	public ?string $providerData = null;

	/** @var string|null */
	public ?string $photoUrl = null;

	/** @var int|null */
	public ?int $photoSize = null;

	/** @var int|null */
	public ?int $photoWidth = null;

	/** @var int|null */
	public ?int $photoHeight = null;

	/** @var bool|null */
	public ?bool $needName = null;

	/** @var bool|null */
	public ?bool $needPhoneNumber = null;

	/** @var bool|null */
	public ?bool $needEmail = null;

	/** @var bool|null */
	public ?bool $needShippingAddress = null;

	/** @var bool|null */
	public ?bool $sendPhoneNumberToProvider = null;

	/** @var bool|null */
	public ?bool $sendEmailToProvider = null;

	/** @var bool|null */
	public ?bool $isFlexible = null;
}
