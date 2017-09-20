<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) . '/../Util/StringEx.php';

/**
 * Description of BaseEnum
 *
 * @author geanribeiro
 */
abstract class BaseEnum {

    public static function getType() {
        return get_class($this);
    }

    public static function getValue($typeName, $value) {
        return self::retrieve($typeName, $value);
    }

    public static function getTitle($typeName, $value) {
        return self::retrieve($typeName, $value, true);
    }

    public static function check($typeName, $value) {
        if (!is_null($value) && is_null(self::retrieve($typeName, $value, true))) {
            throw new Exception("O valor {$value} não está contido nas opções válidas para {$typeName}.");
        }
    }

    private static function retrieve($typeName, $value, $returnKey = false) {
        $class = new ReflectionClass($typeName);
        $constants = $class->getConstants();
        foreach ($constants as $key => $val) {
            $compareKey = str_replace(" ", "", StringEx::simplify($key));
            $compareValue = str_replace(" ", "", StringEx::simplify($value));
            
            if ($value === $val || $compareKey === $compareValue) {
                return $returnKey ? $key : $val;
            }
        }
        return null;
    }

}
