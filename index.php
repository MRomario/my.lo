<?php

declare(strict_types=1);

require './vendor/autoload.php';


use Mr\Patterns\AbstractFactory\AbstractFactoryUsers;

$userFactory = new AbstractFactoryUsers();
//var_dump($userFactory->createGuest()->getRole(), $userFactory->createUser()->getRole());