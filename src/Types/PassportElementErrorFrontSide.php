<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorFrontSide extends PassportElementError
{
	/** @var string */
	public string $source = 'front_side';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
