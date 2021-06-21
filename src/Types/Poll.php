<?php

namespace Sysbot\Telegram\Types;

class Poll implements TypeInterface
{
	/** @var string */
	public string $id;

	/** @var string */
	public string $question;

	/** @var Array<PollOption> */
	public array $options;

	/** @var int */
	public int $totalVoterCount;

	/** @var bool */
	public bool $isClosed;

	/** @var bool */
	public bool $isAnonymous;

	/** @var string */
	public string $type;

	/** @var bool */
	public bool $allowsMultipleAnswers;

	/** @var int|null */
	public ?int $correctOptionId = null;

	/** @var string|null */
	public ?string $explanation = null;

	/** @var Array<MessageEntity>|null */
	public ?array $explanationEntities = null;

	/** @var int|null */
	public ?int $openPeriod = null;

	/** @var int|null */
	public ?int $closeDate = null;
}
