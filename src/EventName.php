<?php
namespace Willy68\Event;

use League\Event\HasEventName;

class EventName implements HasEventName
{
    protected $eventName;

    public function __construct(?string $eventName = null)
    {
        $this->eventName = $eventName;
    }

    public function eventName(): string
    {
        return $this->eventName ? $this->eventName: '';
    }

    public function setEventName(string $eventName)
    {
        $this->eventName = $eventName;
    }
}
