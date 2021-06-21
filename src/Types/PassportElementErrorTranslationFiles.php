<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorTranslationFiles implements TypeInterface
{
	/** @var string */
	public string $source;

	/** @var string */
	public string $type;

	/** @var Array<string> */
	public array $fileHashes;

	/** @var string */
	public string $message;
}
