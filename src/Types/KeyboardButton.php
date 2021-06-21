<?php

namespace Sysbot\Telegram\Types;

class KeyboardButton implements TypeInterface
{
	/** @var string */
	public string $text;

	/** @var bool|null */
	public ?bool $requestContact = null;

	/** @var bool|null */
	public ?bool $requestLocation = null;

	/** @var KeyboardButtonPollType|null */
	public ?KeyboardButtonPollType $requestPoll = null;
}
