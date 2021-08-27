<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorReverseSide extends PassportElementError
{
	/** @var string */
	public string $source = 'reverse_side';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
