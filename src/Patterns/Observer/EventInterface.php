<?php


namespace Mr\Patterns\Observer;


interface EventInterface
{
    public function getTitle(): string;

    public function getSender();

}