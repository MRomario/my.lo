<?php

namespace Mr\Patterns\Adapter;

interface IWriterLogLayer extends IWriterLog
{
    /**
     * @param IWriterLog $logger
     */
    public function addLogger(IWriterLog $logger):void;
}