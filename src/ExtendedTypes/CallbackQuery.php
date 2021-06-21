<?php


namespace Sysbot\Telegram\ExtendedTypes;


use GuzzleHttp\Promise\PromiseInterface;

trait CallbackQuery
{

    use BaseType;

    public function answer(
        ?string $text = null,
        ?bool $showAlert = null,
        ?string $url = null,
        ?int $cacheTime = null
    ): PromiseInterface {
        return $this->api->answerCallbackQuery(
            callbackQueryId: $this->id,
            text: $text,
            showAlert: $showAlert,
            url: $url,
            cacheTime: $cacheTime
        );
    }

}