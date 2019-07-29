<?php


namespace Mr\Patterns\Adapter;


interface IWriterLog
{
    /**
     * @param string $textLog
     */
    public function write(string $textLog): void;

}