<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArrayEx
 *
 * @author Gean
 */
class ArrayEx {

    public static function transform(array $array, $deep = false) {
        $result = array();

        foreach ($array as $key => $value) {
            if (is_object($value)) {
                if (array_key_exists("{$key}_id", $array))
                    continue;
                if ($deep || !($value instanceof Entidade)) {
                    $result[$key] = ArrayEx::transform(get_object_vars($value));
                } else {
                    $result[$key] = array("Id" => $value->getId());
                }
            } else if (is_array($value)) {
                $result[$key] = ArrayEx::transform($value, !$deep);
            } else if (!is_null($value)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

}
