<?php

namespace Sysbot\Telegram\Types;

class InputTextMessageContent extends InputMessageContent
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
