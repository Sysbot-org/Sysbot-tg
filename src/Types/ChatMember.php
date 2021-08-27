<?php

namespace Sysbot\Telegram\Types;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/** @DiscriminatorMap(typeProperty="status", mapping={
 *     "administrator"="Sysbot\Telegram\Types\ChatMemberAdministrator",
 *     "kicked"="Sysbot\Telegram\Types\ChatMemberBanned",
 *     "left"="Sysbot\Telegram\Types\ChatMemberLeft",
 *     "member"="Sysbot\Telegram\Types\ChatMemberMember",
 *     "owner"="Sysbot\Telegram\Types\ChatMemberOwner",
 *     "restricted"="Sysbot\Telegram\Types\ChatMemberRestricted"
 *     })
 */
abstract class ChatMember implements TypeInterface
{
}
