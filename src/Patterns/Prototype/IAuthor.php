<?php


namespace Mr\Patterns\Prototype;


interface IAuthor
{
    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @param string $email
     */
    public function setEmail(string $email): void;

}