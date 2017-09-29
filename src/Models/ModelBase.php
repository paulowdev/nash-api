<?php

namespace Nash\Models;

use Nash\Traits\Arrayable;
/**
 * Description of ModelBase
 *
 * @author geanribeiro
 */
class ModelBase 
{
    use Arrayable;

    public function toJson() {
        $data = $self::transform(get_object_vars($this));
        return json_encode($data);
    }

    public function __construct($data = null) {
        if (!is_null($data)) {
            if ($data instanceof stdClass) {
                $this->loadFromStdClass($data);
            } else if (is_array($data)) {
                $this->loadFromArray($data);
            } else if (is_int($data)) {
                $this->setId($data);
            }
        }
    }

    public function loadFromStdClass($data) {
        $vars = get_object_vars($data);
        $this->loadFromArray($vars);
    }

    public function loadFromArray($data) {
        foreach ($data as $property => $value) {
            if (strpos($property, ".")) {
                $parts = explode(".", $property);
                $property = array_shift($parts);
                $value = $this->getValueStructure($parts, $value);
            }

            $methodSet = "set" . ucfirst($property);
            $getter = "get" . ucfirst($property);
            
            if (method_exists($this, $methodSet)) {
                $setterValue = $this->getValue($getter, $methodSet, $value);
                $this->$methodSet($setterValue);
            }
        }
    }

    private function getValue($getter, $setter, $value) {
        $setterValue = $value;
        if (is_object($value) || is_array($value)) {
            if (is_array($value) && method_exists($this, $getter) && !is_null($this->$getter())) {
                $this->$getter()->loadFromArray($value);
                $setterValue = $this->$getter();
            } else if (strcmp($parameterTypeName = $this->getParameterClassName($setter), "array")) {
                //$parameterTypeName = $this->getParameterClassName($setter);
                
                if (strcmp($parameterTypeName, "undefined")) {
                    $setterValue = new $parameterTypeName($value);
                } else {
                    $setterValue = $value;
                }
            }
        }
        return $setterValue;
    }

    private function getParameterClassName($setter) {
        $object = new ReflectionObject($this);
        $className = $object->getName();

        $method = new ReflectionMethod($className, $setter);
        $parameter = $method->getParameters();
        $parameter = $parameter[0];

        $parameterClass = $parameter->getClass();

        if (!$parameter->isArray() && is_null($parameterClass)) {
            //throw new Exception("O paramentro \"\${$parameter->getName()}\" do metodo \"{$className}->{$setter}\" nao possui um tipo definido!");
            return "undefined";
        }

        $parameterClassName = $parameter->isArray() ? "array" : $parameterClass->getName();
        return $parameterClassName;
    }

    private function getValueStructure($parts, $value) {
        $valueStructure = array();
        $valueElement = &$valueStructure;
        while (($count = count($parts)) > 0) {
            $idx = array_shift($parts);
            if ($count > 1) {
                $valueElement[$idx] = array();
                $valueElement = &$valueElement[$idx];
            } else {
                $valueElement[$idx] = $value;
            }
        }
        return $valueStructure;
    }

}
