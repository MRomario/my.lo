<?php


namespace Mr\Patterns\Adapter;


class WriterLog implements IWriterLogLayer
{
    protected $stackLog = [];

    /**
     * {@inheritDoc}
     */
    public function addLogger(IWriterLog $logger): void
    {
        $this->stackLog[] = $logger;
    }

    /**
     * {@inheritDoc}
     */
    public function write(string $textLog): void
    {
        foreach ($this->stackLog as $logger) {
            $logger->write($textLog);
        }
    }
}