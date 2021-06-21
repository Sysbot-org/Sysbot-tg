<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorDataField implements TypeInterface
{
	/** @var string */
	public string $source;

	/** @var string */
	public string $type;

	/** @var string */
	public string $fieldName;

	/** @var string */
	public string $dataHash;

	/** @var string */
	public string $message;
}
