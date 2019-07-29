<?php


namespace Mr\Patterns\Singleton;


use Exception;
use Mr\Patterns\Singletone\ISingleton;

class Singleton implements ISingleton
{
    private static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    protected function __clone()
    {

    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}