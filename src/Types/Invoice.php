<?php

namespace Sysbot\Telegram\Types;

class Invoice implements TypeInterface
{
	/** @var string */
	public string $title;

	/** @var string */
	public string $description;

	/** @var string */
	public string $startParameter;

	/** @var string */
	public string $currency;

	/** @var int */
	public int $totalAmount;
}
