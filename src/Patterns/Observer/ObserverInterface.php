<?php


namespace Mr\Patterns\Observer;


interface ObserverInterface
{
    public function update(EventInterface $event): void;
}