<?php

namespace Sysbot\Telegram\Types;

class Game implements TypeInterface
{
	/** @var string */
	public string $title;

	/** @var string */
	public string $description;

	/** @var Array<PhotoSize> */
	public array $photo;

	/** @var string|null */
	public ?string $text = null;

	/** @var Array<MessageEntity>|null */
	public ?array $textEntities = null;

	/** @var Animation|null */
	public ?Animation $animation = null;
}
