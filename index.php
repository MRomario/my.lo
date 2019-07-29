<?php

declare(strict_types=1);

require './vendor/autoload.php';


use Mr\Patterns\AbstractFactory\AbstractFactoryUsers;
use Mr\Patterns\Adapter\WriterLogDataBase;
use Mr\Patterns\Adapter\WriterLog;
use Mr\Patterns\Adapter\WriterLogFile as WriterLogFile;
use Mr\Patterns\Adapter\DataBase;
use Mr\Patterns\Factory\FacebookPoster;
use Mr\Patterns\Builder\MySqlQueryBuilder;
use Mr\Patterns\Observer\Customer as Customer;
use Mr\Patterns\Observer\Product as Product;
use Mr\Patterns\Prototype\Author;
use Mr\Patterns\Prototype\Page;
use Mr\Patterns\Singleton\Singleton;

#######################################################
# abstract factory

//$userFactory = new AbstractFactoryUsers();
//var_dump($userFactory->createGuest()->getRole(), $userFactory->createUser()->getRole());

#######################################################
# factory

//$poster = new FacebookPoster('my login', 'my password');
//$poster->createPost('My new post');

#######################################################
# builder

//$sql = new MySqlQueryBuilder();
//$sql->select('Users', ['id', 'name', 'email']);
//$sql->where('name', 'test name');
//var_dump($sql->getSQL());

#######################################################
# prototype

//$page = new Page();
//
//$author = new Author();
//$author->setName('Roman');
//$author->setEmail('test@mail.com');
//
//$page->addTitle('first title');
//$page->addBody('first body');
//$page->addComment('first comment');
//$page->addAuthor($author);
//
//$pageSecond = clone $page;
//
//var_dump($page, $pageSecond);

#######################################################
# singleton

//$objectFirst = Singleton::getInstance();
//$objectSecond = Singleton::getInstance();

//var_dump($objectFirst, $objectSecond);

#######################################################
# adapter

//$logger = new WriterLog();
//$logger->addLogger(new WriterLogFile());
//$logger->addLogger(new WriterLogDataBase());
//
//$logger->write('first text');
//$logger->write('second text');

#######################################################
# observer

$product = new Product('Asus');
$customerFirst = new Customer('Roman');
$customerSecond = new Customer('Igor');

$product->attachObserver($customerFirst);
$product->attachObserver($customerSecond);

$product->eventPrice();
