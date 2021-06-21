<?php

namespace Sysbot\Telegram\Types;

use stdClass;

class Response
{

    use \Sysbot\Telegram\ExtendedTypes\Response;

    public bool $ok;
    public stdClass|TypeInterface|array|int|string|bool|null $result = null;
    public ?int $errorCode = null;
    public ?string $description = null;
}
