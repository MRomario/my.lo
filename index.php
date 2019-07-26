<?php

declare(strict_types=1);

require './vendor/autoload.php';


use Mr\Patterns\AbstractFactory\AbstractFactoryUsers;
use Mr\Patterns\Factory\FacebookPoster;

$userFactory = new AbstractFactoryUsers();
var_dump($userFactory->createGuest()->getRole(), $userFactory->createUser()->getRole());

$poster = new FacebookPoster('my login', 'my password');
$poster->createPost('My new post');