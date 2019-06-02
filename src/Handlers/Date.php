<?php

namespace devtoolboxuk\utilitybundle\handlers;

use DateTime;
use Exception;

class Date extends Handler
{
    private $dateFormat = 'Y-m-d H:i:s';

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

        return $this->getTimeFormat($dt);
    }

    /**
     * Overrides the date format
     *
     * @param string $format
     */
    public function setDateFormat($format = 'Y-m-d H:i:s' )
    {
        $this->dateFormat = $format;
    }

    /**
     * @param DateTime $date
     * @return string
     */
    private function getTimeFormat(DateTime $date)
    {
        return $date->format($this->dateFormat);
    }


    /**
     * Gets the modified date in the standard format
     *
     * @param string $modify_string
     * @param null $date
     * @return string|null
     * @throws Exception
     */
    public function modify($modify_string = '', $date = null)
    {
        $dt = new DateTime($date);
        $modified = null;
        if ($modify_string && $modify_string != '') {
            $modified = $dt->modify($modify_string);
        }

        return $this->getTimeFormat($modified);
    }

    /**
     *
     * Checks if a datetime has been passed
     *
     * @param null $startDate
     * @param null $checkDate
     * @return bool|null
     * @throws Exception
     */
    public function datePassed($startDate = null, $checkDate = null)
    {
        if ($this->convert($startDate) < $this->convert($checkDate)) {
            return true;
        }
        return null;
    }
}