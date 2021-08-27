<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorFiles extends PassportElementError
{
	/** @var string */
	public string $source = 'files';

	/** @var string */
	public string $type;

	/** @var Array<string> */
	public array $fileHashes;

	/** @var string */
	public string $message;
}
