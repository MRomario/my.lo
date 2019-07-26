<?php


namespace Mr\Patterns\Factory;


class FacebookPoster implements ISocialNetworkPoster
{
    protected $login;
    protected $password;
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): ISocialNetworkConnector
    {
        return new FaceBookConnector($this->login, $this->password);
    }

    /**
     * @param $content
     */
    public function createPost($content): void
    {
        $network = $this->getSocialNetwork();
        $network->login($this->login, $this->password);
        $network->createPost($content);
        $network->logOut();
    }
}