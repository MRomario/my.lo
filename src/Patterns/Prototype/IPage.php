<?php


namespace Mr\Patterns\Prototype;


interface IPage
{
    /**
     * @param string $title
     */
    public function addTitle(string $title): void;

    /**
     * @param string $body
     */
    public function addBody(string $body): void;


    /**
     * @param IAuthor $author
     */
    public function addAuthor(IAuthor $author): void;


    /**
     * @param string $comment
     */
    public function addComment(string $comment): void;
}