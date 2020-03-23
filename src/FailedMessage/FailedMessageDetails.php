<?php

declare(strict_types=1);

namespace SymfonyCasts\MessengerMonitorBundle\FailedMessage;

/**
 * @internal
 * @psalm-immutable
 */
final class FailedMessageDetails
{
    /** @psalm-suppress MissingParamType */
    private $id;
    private $class;
    private $failedAt;
    private $error;

    /** @psalm-suppress MissingParamType */
    public function __construct($id, string $class, string $failedAt, ?string $error)
    {
        $this->id = $id;
        $this->class = $class;
        $this->failedAt = $failedAt;
        $this->error = $error;
    }

    /** @psalm-suppress MissingReturnType */
    public function getId()
    {
        return $this->id;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getFailedAt(): string
    {
        return $this->failedAt;
    }

    public function getError(): ?string
    {
        return $this->error;
    }
}
