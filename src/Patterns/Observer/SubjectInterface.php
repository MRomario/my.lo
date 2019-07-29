<?php

namespace Mr\Patterns\Observer;

interface SubjectInterface
{
    /**
     * @param ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer): void;

    /**
     * @param ObserverInterface $observer
     */
    public function detachObserver(ObserverInterface $observer): void;

    /**
     * @param EventInterface $event
     */
    public function notify(EventInterface $event): void;
}