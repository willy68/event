<?php

namespace Willy68\Event;

interface EventTargetInterface
{

    /**
     * Get the target event.
     * Return an object who emited event
     *
     * @return object
     */
    public function getTarget(): object;
}
