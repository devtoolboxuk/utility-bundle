<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Debug extends Handler
{
    private $time_start;

    public function initialise()
    {
        $this->time_start = microtime();
    }

    /**
     * @return false|string
     */
    public function executionTime()
    {
        $time_end = microtime();
        $execution_time = ($time_end - $this->time_start);
        return $this->formatPeriod( $execution_time);
    }

    /**
     * @param $totalSeconds
     * @return string
     */
    private function formatPeriod($totalSeconds) {
        $startTotalSeconds = $totalSeconds;
        $hours = floor($totalSeconds / 3600);
        $totalSeconds %= 3600;
        $minutes = floor($totalSeconds / 60);
        $seconds = $startTotalSeconds - ($minutes * 60);
        return sprintf("%02d",$hours) . ":" . sprintf("%02d",$minutes) . ":" .sprintf("%.3f", $seconds);
    }
}