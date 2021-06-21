<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorUnspecified implements TypeInterface
{
	/** @var string */
	public string $source;

	/** @var string */
	public string $type;

	/** @var string */
	public string $elementHash;

	/** @var string */
	public string $message;
}
