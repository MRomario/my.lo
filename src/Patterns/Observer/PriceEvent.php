<?php


namespace Mr\Patterns\Observer;


class PriceEvent implements EventInterface
{

    protected $title;
    protected $sender;

    public function __construct($sender, string $title)
    {
        $this->title = $title;
        $this->sender = $sender;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSender()
    {
        return $this->sender;
    }
}