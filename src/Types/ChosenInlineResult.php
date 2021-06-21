<?php

namespace Sysbot\Telegram\Types;

class ChosenInlineResult implements TypeInterface
{
	/** @var string */
	public string $resultId;

	/** @var User */
	public User $from;

	/** @var Location|null */
	public ?Location $location = null;

	/** @var string|null */
	public ?string $inlineMessageId = null;

	/** @var string */
	public string $query;
}
