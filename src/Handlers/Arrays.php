<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Arrays extends Handler
{

    /**
     * @param $array
     * @return array
     */
    public function arrayValuesRecursive($array)
    {
        $flat = [];

        foreach ($array as $value) {
            if (is_array($value)) {
                $flat = array_merge($flat, $this->arrayValuesRecursive($value));
            } else {
                $flat[] = $value;
            }
        }
        return $flat;
    }

}