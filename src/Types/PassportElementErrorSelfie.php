<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorSelfie extends PassportElementError
{
	/** @var string */
	public string $source = 'selfie';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
