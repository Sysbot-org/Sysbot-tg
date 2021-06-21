<?php

namespace Sysbot\Telegram\Types;

class EncryptedPassportElement implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var string|null */
	public ?string $data = null;

	/** @var string|null */
	public ?string $phoneNumber = null;

	/** @var string|null */
	public ?string $email = null;

	/** @var Array<PassportFile>|null */
	public ?array $files = null;

	/** @var PassportFile|null */
	public ?PassportFile $frontSide = null;

	/** @var PassportFile|null */
	public ?PassportFile $reverseSide = null;

	/** @var PassportFile|null */
	public ?PassportFile $selfie = null;

	/** @var Array<PassportFile>|null */
	public ?array $translation = null;

	/** @var string */
	public string $hash;
}
