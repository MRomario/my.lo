<?php


namespace Mr\Patterns\Factory;


interface ISocialNetworkConnector
{
    /**
     * @param string $login
     * @param $password
     */
    public function login(string $login, $password): void;

    /**
     * @param $content
     */
    public function createPost($content): void;

    public function logOut(): void;

}