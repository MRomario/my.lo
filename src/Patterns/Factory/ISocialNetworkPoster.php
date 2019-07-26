<?php

namespace Mr\Patterns\Factory;

interface ISocialNetworkPoster
{

    /**
     * @return ISocialNetworkConnector
     */
    public function getSocialNetwork(): ISocialNetworkConnector;

    /**
     * @param $content
     */
    public function createPost($content): void;
}