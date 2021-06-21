<?php

namespace Sysbot\Telegram\Types;

class Contact implements TypeInterface
{
	/** @var string */
	public string $phoneNumber;

	/** @var string */
	public string $firstName;

	/** @var string|null */
	public ?string $lastName = null;

	/** @var int|null */
	public ?int $userId = null;

	/** @var string|null */
	public ?string $vcard = null;
}
