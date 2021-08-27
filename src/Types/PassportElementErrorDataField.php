<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorDataField extends PassportElementError
{
	/** @var string */
	public string $source = 'data';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fieldName;

	/** @var string */
	public string $dataHash;

	/** @var string */
	public string $message;
}
