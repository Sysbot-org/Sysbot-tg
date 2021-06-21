<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorSelfie implements TypeInterface
{
	/** @var string */
	public string $source;

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
