<?php

namespace Sysbot\Telegram\Types;

class StickerSet implements TypeInterface
{
	/** @var string */
	public string $name;

	/** @var string */
	public string $title;

	/** @var bool */
	public bool $isAnimated;

	/** @var bool */
	public bool $containsMasks;

	/** @var Array<Sticker> */
	public array $stickers;

	/** @var PhotoSize|null */
	public ?PhotoSize $thumb = null;
}
