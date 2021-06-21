<?php

namespace Sysbot\Telegram\Types;

class Update implements TypeInterface
{
	/** @var int */
	public int $updateId;

	/** @var Message|null */
	public ?Message $message = null;

	/** @var Message|null */
	public ?Message $editedMessage = null;

	/** @var Message|null */
	public ?Message $channelPost = null;

	/** @var Message|null */
	public ?Message $editedChannelPost = null;

	/** @var InlineQuery|null */
	public ?InlineQuery $inlineQuery = null;

	/** @var ChosenInlineResult|null */
	public ?ChosenInlineResult $chosenInlineResult = null;

	/** @var CallbackQuery|null */
	public ?CallbackQuery $callbackQuery = null;

	/** @var ShippingQuery|null */
	public ?ShippingQuery $shippingQuery = null;

	/** @var PreCheckoutQuery|null */
	public ?PreCheckoutQuery $preCheckoutQuery = null;

	/** @var Poll|null */
	public ?Poll $poll = null;

	/** @var PollAnswer|null */
	public ?PollAnswer $pollAnswer = null;

	/** @var ChatMemberUpdated|null */
	public ?ChatMemberUpdated $myChatMember = null;

	/** @var ChatMemberUpdated|null */
	public ?ChatMemberUpdated $chatMember = null;
}
