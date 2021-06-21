<?php


namespace Sysbot\Telegram\Common;


/**
 * Class NameNormalizer
 * @package Sysbot\Telegram\Common
 */
class NameNormalizer
{

    /**
     * @param string $input
     * @return string
     */
    public static function camelCaseToSnakeCase(string $input): string
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

}