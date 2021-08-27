<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorTranslationFile extends PassportElementError
{
	/** @var string */
	public string $source = 'translation_file';

	/** @var string */
	public string $type;

	/** @var string */
	public string $fileHash;

	/** @var string */
	public string $message;
}
