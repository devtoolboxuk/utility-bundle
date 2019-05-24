<?php

namespace devtoolboxuk\utilitybundle\handlers;

use DateTime;
use Exception;

class Date extends Handler
{
    /**
     * @param $date
     * @return string|null
     * @throws Exception
     */
    public function convert($date)
    {
        if ($date === '0000-00-00 00:00:00') {
            return null;
        }

        try {
            $dt = new DateTime($date);
        } catch (Exception $x) {
            throw new Exception("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($date, true), $x);
        }


        if (strpos($this->dateFormat, '%') !== false) {
            return strftime($this->dateFormat, $dt->format('U'));
        }

        return $dt->format($this->dateFormat);

    }
}