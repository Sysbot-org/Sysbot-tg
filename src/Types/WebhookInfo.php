<?php

namespace Sysbot\Telegram\Types;

class WebhookInfo implements TypeInterface
{
	/** @var string */
	public string $url;

	/** @var bool */
	public bool $hasCustomCertificate;

	/** @var int */
	public int $pendingUpdateCount;

	/** @var string|null */
	public ?string $ipAddress = null;

	/** @var int|null */
	public ?int $lastErrorDate = null;

	/** @var string|null */
	public ?string $lastErrorMessage = null;

	/** @var int|null */
	public ?int $maxConnections = null;

	/** @var Array<string>|null */
	public ?array $allowedUpdates = null;
}
