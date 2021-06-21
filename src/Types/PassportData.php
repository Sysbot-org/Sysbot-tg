<?php

namespace Sysbot\Telegram\Types;

class PassportData implements TypeInterface
{
	/** @var Array<EncryptedPassportElement> */
	public array $data;

	/** @var EncryptedCredentials */
	public EncryptedCredentials $credentials;
}
