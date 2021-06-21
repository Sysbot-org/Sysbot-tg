<?php

namespace Sysbot\Telegram\Types;

class MaskPosition implements TypeInterface
{
	/** @var string */
	public string $point;

	/** @var float */
	public float $xShift;

	/** @var float */
	public float $yShift;

	/** @var float */
	public float $scale;
}
