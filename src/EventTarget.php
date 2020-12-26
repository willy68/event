<?php

namespace Willy68\Event;

class EventTarget implements EventTargetInterface
{
    protected $target = null;

    public function __construct(?object $target = null)
    {
        $this->target = $target;
    }

    public function getTarget(): object
    {
        return $this->target;
    }

    public function setTarget(object $target)
    {
        $this->target = $target;
    }
}
