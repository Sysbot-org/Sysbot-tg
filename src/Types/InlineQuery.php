<?php

namespace Sysbot\Telegram\Types;

class InlineQuery implements TypeInterface
{
	/** @var string */
	public string $id;

	/** @var User */
	public User $from;

	/** @var string */
	public string $query;

	/** @var string */
	public string $offset;

	/** @var string|null */
	public ?string $chatType = null;

	/** @var Location|null */
	public ?Location $location = null;
}
