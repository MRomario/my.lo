<?php


namespace Mr\Patterns\Adapter;


use DateTime as DateTime;
use DateTimeZone as DateTimeZone;

class DataBase implements IWriterLog
{
    private static $instance;

    private function __construct()
    {
        var_dump('connect to data base');
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    /**
     * {@inheritDoc}
     */
    public function write(string $textLog): void
    {
        $date = new DateTime();
        $date->setTimeZone(new DateTimeZone('Europe/Kiev'));
        var_dump("$textLog : WRITE TO DATA BASE : " . $date->format('Y-m-d H:i:s.u'));
    }
}