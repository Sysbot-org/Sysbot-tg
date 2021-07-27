<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;
use Sysbot\Telegram\API;
use Sysbot\Telegram\Types\BotCommandScope;

trait BotCommand
{

    public function __construct(protected ?API $api)
    {
    }

    public function add(?BotCommandScope $scope = null, ?string $languageCode = null): ?PromiseInterface
    {
        return $this->api?->getMyCommands(scope: $scope, languageCode: $languageCode)->then(
            function (array $commands) use ($scope, $languageCode) {
                $commands = array_merge($commands, [$this]);
                return $this->api->setMyCommands(commands: $commands, scope: $scope, languageCode: $languageCode);
            }
        );
    }

    public function remove(?BotCommandScope $scope = null, ?string $languageCode = null): ?PromiseInterface
    {
        return $this->api?->getMyCommands(scope: $scope, languageCode: $languageCode)->then(
            function (array $commands) use ($scope, $languageCode) {
                $commands = array_udiff(
                    $commands,
                    [$this],
                    fn(BotCommand $a, BotCommand $b) => $a->command <=> $b->command
                );
                return $this->api->setMyCommands(commands: $commands, scope: $scope, languageCode: $languageCode);
            }
        );
    }

}