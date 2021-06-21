<?php

namespace Sysbot\Telegram\Types;

class ResponseParameters implements TypeInterface
{
	/** @var int|null */
	public ?int $migrateToChatId = null;

	/** @var int|null */
	public ?int $retryAfter = null;
}
