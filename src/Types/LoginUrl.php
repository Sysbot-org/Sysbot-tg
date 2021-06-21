<?php

namespace Sysbot\Telegram\Types;

class LoginUrl implements TypeInterface
{
	/** @var string */
	public string $url;

	/** @var string|null */
	public ?string $forwardText = null;

	/** @var string|null */
	public ?string $botUsername = null;

	/** @var bool|null */
	public ?bool $requestWriteAccess = null;
}
