<?php

namespace Willy68\Event;

use League\Event\HasEventName;
use Psr\EventDispatcher\StoppableEventInterface;

class Event implements StoppableEventInterface, HasEventName, EventTargetInterface
{
    protected $isStopped = false;

    protected $name = '';

    protected $target = null;

    public function __construct(?object $target = null, string $name = '')
    {
        $this->target = $target;
        $this->name = $name;
    }

    public function stopPropagation(): void
    {
        $this->isStopped = true;
    }

    public function isPropagationStopped(): bool
    {
        return $this->isStopped;
    }

    public function setEventName(string $eventName): void
    {
        $this->name = $eventName;
    }

    public function eventName(): string
    {
        return $this->name;
    }

    public function getTarget(): object
    {
        return $this->target;
    }
}
