<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorFile extends PassportElementError
{
	/** @var string */
	public string $source = 'file';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
