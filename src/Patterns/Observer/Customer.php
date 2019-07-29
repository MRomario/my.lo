<?php


namespace Mr\Patterns\Observer;


class Customer implements CustomerInterface, ObserverInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(EventInterface $event): void
    {
        $string = sprintf("Product [%s] : Event [%s] : Customer : %s", $event->getSender()->getTitle(), $event->getTitle(), $this->name);
        var_dump($string);
    }
}