<?php


namespace Mr\Patterns\Factory;


class FaceBookConnector implements ISocialNetworkConnector
{
    /**
     * @param string $login
     * @param $password
     */
    public function login(string $login, $password): void
    {
        var_dump('LOG IN request http');
    }

    /**
     * @param $content
     */
    public function createPost($content): void
    {
        var_dump('POST CREATE: ' . $content . ' request http');
    }

    public function logOut(): void
    {
        var_dump('LOG OUT request http');
    }

}