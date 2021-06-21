<?php

namespace Sysbot\Telegram\Types;

class LabeledPrice implements TypeInterface
{
	/** @var string */
	public string $label;

	/** @var int */
	public int $amount;
}
