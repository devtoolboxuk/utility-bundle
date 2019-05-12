<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Memory extends Handler
{

    /**
     * @param bool $real_usage
     * @return string
     */
    public function getPeakMemUsage($real_usage = false)
    {
        return $this->formatBytes(memory_get_peak_usage($real_usage));
    }

    /**
     * @param bool $real_usage
     * @return string
     */
    public function getMemUsage($real_usage = false)
    {
        return $this->formatBytes(memory_get_usage($real_usage));
    }

}