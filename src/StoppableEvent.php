<?php

namespace Willy68\Event;

use Psr\EventDispatcher\StoppableEventInterface;

class StoppableEvent implements StoppableEventInterface
{
    protected $isStopped = false;

    public function stopPropagation()
    {
        $this->isStopped = true;
    }

    public function isPropagationStopped(): bool
    {
        return $this->isStopped;
    }
}
