<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Debug extends Handler
{
    private $time_start;

    public function initialise()
    {
        $this->time_start = microtime(true);
    }

    /**
     * @return false|string
     */
    public function executionTime()
    {
        $time_end = microtime(true);
        $execution_time = ($time_end - $this->time_start);
        return date("H:i:s", $execution_time);
    }

}