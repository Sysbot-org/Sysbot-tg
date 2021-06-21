<?php

namespace Sysbot\Telegram\Types;

class File implements TypeInterface
{
	/** @var string */
	public string $fileId;

	/** @var string */
	public string $fileUniqueId;

	/** @var int|null */
	public ?int $fileSize = null;

	/** @var string|null */
	public ?string $filePath = null;
}
