<?php


namespace Sysbot\Telegram\ExtendedTypes;


use Sysbot\Telegram\API;

trait BaseType
{

    public function __construct(protected API $api)
    {
    }

}