<?php


namespace Mr\Patterns\Observer;


class Product implements ProductInterface, SubjectInterface
{
    protected $title;

    protected $observers = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function attachObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detachObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $keyObserver => $itemObserver) {
            if ($itemObserver === $observer) {
                unset($this->observers[$keyObserver]);
                return;
            }
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function eventPrice(){
        $event = new PriceEvent($this, 'discount');
        $this->notify($event);
    }

    public function notify(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}