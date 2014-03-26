<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjectParser
 *
 * @author geanribeiro
 */
class ObjectParser {
    public static function toArray($object) {
        $result = array();
      
        if(is_array($object))
        {
            //TODO:
        } else if (!ObjectParser::loadArray($object, $result)) {
            return $object;
        }
        
        return $result;
    }
    
    private static function getProperties($object) {
        $reflect = new ReflectionClass($object);
        $properties = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);
        return $properties;
    }
    
    private static function loadArray($object, &$result, $prefix = "") {
        $properties = ObjectParser::getProperties($object);
        if (is_array($properties)) {
            foreach ($properties as $key => $prop) {
                $methodName = "get" . ucfirst($prop->getName());
                $value = $object->$methodName();
                $name = $prefix . $prop->getName();

                if (is_object($value)) {
                    ObjectParser::loadArray($value, $result, "$name.");
                } else {
                    $result[$name] = $value;
                }
            }
            return true;
        }
        return false;
    }
}
