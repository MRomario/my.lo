<?php


namespace Mr\Patterns\Adapter;


use DateTime as DateTime;
use DateTimeZone as DateTimeZone;

class WriterLogFile implements IWriterLogFile
{

    /**
     * {@inheritDoc}
     */
    public function write(string $textLog): void
    {
        $date = new DateTime();
        $date->setTimeZone(new DateTimeZone('Europe/Kiev'));
        var_dump("$textLog : WRITE TO FILE : " . $date->format('Y-m-d H:i:s.u'));
    }
}