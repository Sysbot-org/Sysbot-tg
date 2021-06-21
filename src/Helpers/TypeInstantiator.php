<?php


namespace Sysbot\Telegram\Helpers;


use JetBrains\PhpStorm\Pure;
use Sysbot\Telegram\API;
use Sysbot\Telegram\Types\ChatPermissions;

trait TypeInstantiator
{

    #[Pure]
    public function createChatPermissions(bool ...$permissions): ChatPermissions
    {
        /** @var API $this */
        $chatPermissions = new ChatPermissions($this);
        foreach ($permissions as $permission => $value) {
            if (property_exists($chatPermissions, $permission)) {
                $chatPermissions->{$permission} = $value;
            }
        }
        return $chatPermissions;
    }

}