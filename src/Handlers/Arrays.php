<?php

namespace devtoolboxuk\utilitybundle\handlers;

class Arrays extends Handler
{

    /**
     * @param array $merged
     * @param array $array2
     * @return array
     */
    public function arrayMergeRecursiveDistinct($merged = [], $array2 = [])
    {
        if (empty($array2)) {
            return $merged;
        }

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->arrayMergeRecursiveDistinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }
        return $merged;
    }

    /**
     * @param array $array
     * @return array
     */
    public function arrayValuesRecursive($array = [])
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

    /**
     * @param $keys
     * @param $arr
     * @return bool
     */
    public function multiple_keys_exists($keys, $arr)
    {
        return !array_diff_key(array_flip($keys), $arr);
    }

    /**
     * @param $obj
     * @return array
     */
    public function object_to_array($obj)
    {

        if (is_object($obj) || is_array($obj)) {
            $ret = (array)$obj;
            foreach ($ret as &$item) {

                $item = $this->object_to_array($item);
            }
            return $ret;
        } else {
            return $obj;
        }
    }

}