<?php


namespace Mr\Patterns\Prototype;


use DateTime;
use DateTimeZone;

class Page implements IPage
{
    private $date;
    private $title;
    private $body;
    private $author;
    private $comments;

    public function __construct()
    {
        $this->date = new DateTime();
        $this->date->setTimeZone(new DateTimeZone('Europe/Kiev'));
        $this->title = 'temp title';
        $this->body = 'temp body';
        $this->comments = [];
        $this->author = 'temp author';
    }

    public function __clone()
    {
        $this->date = new DateTime();
        $this->date->setTimeZone(new DateTimeZone('Europe/Kiev'));
        $this->title = "CLONE OF : " . $this->title;
    }

    /**
     * {@inheritDoc}
     */
    public function addTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * {@inheritDoc}
     */
    public function addBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * {@inheritDoc}
     */
    public function addAuthor(IAuthor $author): void
    {
        $this->author = $author;
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }
}