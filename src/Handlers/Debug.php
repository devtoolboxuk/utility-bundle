<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Debug extends Handler
{
    /**
     * @var float
     */
    protected static $time_start;

    public function initialise()
    {
        self::$time_start = microtime(true);
    }

    /**
     * @return false|string
     */
    public function executionTime()
    {
        $time_end = microtime(true);
        $execution_time = ($time_end - self::$time_start);
        return $this->formatPeriod($execution_time);
    }

    /**
     * @param $totalSeconds
     * @return string
     */
    private function formatPeriod($totalSeconds)
    {
        $startTotalSeconds = $totalSeconds;
        $hours = floor($totalSeconds / 3600);
        $totalSeconds %= 3600;
        $minutes = floor($totalSeconds / 60);
        $seconds = $startTotalSeconds - ($minutes * 60);
        return sprintf("%02d", $hours) . ":" . sprintf("%02d", $minutes) . ":" . sprintf("%.3f", $seconds);
    }
}