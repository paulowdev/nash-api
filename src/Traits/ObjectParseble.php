<?php

namespace Nash\Traits;

/**
 * Description of ObjectParser
 *
 * @author geanribeiro
 */
trait ObjectParseble 
{
    public static function toArray($object) {
        $result = array();
      
        if(is_array($object))
        {
            //TODO:
        } else if (!$self::loadArray($object, $result)) {
            return $object;
        }
        
        return $result;
    }
    
    private static function getProperties($object) {
        $reflect = new ReflectionClass($object);
        $properties = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PRIVATE);
        return $properties;
    }
    
    private static function loadArray($object, &$result, $prefix = "") {
        $reflect = new ReflectionClass($object);
        $typeName = $reflect->getName();
        $properties = $self::getProperties($object);
        if (is_array($properties)) {
            foreach ($properties as $key => $prop) {
                $propertyName = $prop->getName();
                $propNameCamelCase = ucfirst($propertyName);
                $getMethodName = "get$propNameCamelCase";
                $setMethodName = "set$propNameCamelCase";
                $setIdMethodName = "{$setMethodName}_id";
                $setMethodParameter = new ReflectionParameter(array($typeName, $setMethodName), 0);
                
                if($reflect->getMethod($setMethodName) && $setMethodParameter->getClass() && method_exists($object, $setIdMethodName)){
                    continue;
                }
                
                $value = $object->$getMethodName();
                $name = $prefix . $propertyName;

                if (is_object($value)) {
                    $self::loadArray($value, $result, "$name.");
                } else {
                    $result[$name] = $value;
                }
            }
            return true;
        }
        return false;
    }
}
