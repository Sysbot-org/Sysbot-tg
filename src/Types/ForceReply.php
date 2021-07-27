<?php

namespace Sysbot\Telegram\Types;

class ForceReply implements TypeInterface
{
	/** @var bool */
	public bool $forceReply;

    /** @var string|null */
    public ?string $inputFieldPlaceholder = null;

	/** @var bool|null */
	public ?bool $selective = null;
}
