<?php

namespace Sysbot\Telegram\Types;

class MessageEntity implements TypeInterface
{
	/** @var string */
	public string $type;

	/** @var int */
	public int $offset;

	/** @var int */
	public int $length;

	/** @var string|null */
	public ?string $url = null;

	/** @var User|null */
	public ?User $user = null;

	/** @var string|null */
	public ?string $language = null;
}
