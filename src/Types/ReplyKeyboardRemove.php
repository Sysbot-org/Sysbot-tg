<?php

namespace Sysbot\Telegram\Types;

class ReplyKeyboardRemove implements TypeInterface
{
	/** @var bool */
	public bool $removeKeyboard;

	/** @var bool|null */
	public ?bool $selective = null;
}
