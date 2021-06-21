<?php

namespace Sysbot\Telegram\Types;

use Sysbot\Telegram\ExtendedTypes\Downloadable;

class ChatPhoto implements TypeInterface
{

    use Downloadable;

    /** @var string */
    public string $smallFileId;

    /** @var string */
    public string $smallFileUniqueId;

    /** @var string */
    public string $bigFileId;

    /** @var string */
    public string $bigFileUniqueId;
}
