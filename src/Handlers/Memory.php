<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Memory extends Handler
{

    public function getPeakMemUsage()
    {
        return $this->formatBytes(memory_get_peak_usage(true));
    }

    public function getMemUsage()
    {
        return $this->formatBytes(memory_get_usage(true));
    }

}