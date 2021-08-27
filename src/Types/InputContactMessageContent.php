<?php

namespace Sysbot\Telegram\Types;

class InputContactMessageContent extends InputMessageContent
{
	/** @var string */
	public string $phoneNumber;

	/** @var string */
	public string $firstName;

	/** @var string|null */
	public ?string $lastName = null;

	/** @var string|null */
	public ?string $vcard = null;
}
