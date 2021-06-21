<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class Document implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $fileId;

    /** @var string */
    public string $fileUniqueId;

    /** @var PhotoSize|null */
    public ?PhotoSize $thumb = null;

    /** @var string|null */
    public ?string $fileName = null;

    /** @var string|null */
    public ?string $mimeType = null;

    /** @var int|null */
    public ?int $fileSize = null;
}
