<?php

namespace Sysbot\Telegram\Types;

class EncryptedCredentials implements TypeInterface
{
	/** @var string */
	public string $data;

	/** @var string */
	public string $hash;

	/** @var string */
	public string $secret;
}
