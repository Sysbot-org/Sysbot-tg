<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorUnspecified extends PassportElementError
{
	/** @var string */
	public string $source = 'unspecified';

	/** @var string */
	public string $type;

	/** @var string */
	public string $elementHash;

	/** @var string */
	public string $message;
}
