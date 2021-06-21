<?php

namespace Sysbot\Telegram\Types;

class InputTextMessageContent implements TypeInterface
{
	/** @var string */
	public string $messageText;

	/** @var string|null */
	public ?string $parseMode = null;

	/** @var Array<MessageEntity>|null */
	public ?array $entities = null;

	/** @var bool|null */
	public ?bool $disableWebPagePreview = null;
}
