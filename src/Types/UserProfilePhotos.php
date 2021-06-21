<?php

namespace Sysbot\Telegram\Types;

class UserProfilePhotos implements TypeInterface
{
	/** @var int */
	public int $totalCount;

	/** @var Array<Array<PhotoSize>> */
	public array $photos;
}
