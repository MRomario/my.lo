<?php


namespace Mr\Patterns\Adapter;


class WriterLogDataBase implements IWriterLogDataBase
{
    /**
     * {&@inheritDoc}
     */
    public function write(string $textLog): void
    {
        $db = DataBase::getInstance();
        $db->write($textLog);
    }
}