<?php

namespace Sysbot\Telegram\Types;

class PassportElementErrorTranslationFiles extends PassportElementError
{
	/** @var string */
	public string $source = 'translation_files';

	/** @var string */
	public string $type;

	/** @var Array<string> */
	public array $fileHashes;

	/** @var string */
	public string $message;
}
