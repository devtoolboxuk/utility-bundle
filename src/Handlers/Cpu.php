<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Cpu extends Handler
{

    /**
     * @return mixed
     */
    public function getLoad()
    {
        $load = sys_getloadavg();
        return $load[0];
    }

}