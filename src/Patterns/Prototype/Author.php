<?php


namespace Mr\Patterns\Prototype;


class Author implements IAuthor
{
    private $name;
    private $email;

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}