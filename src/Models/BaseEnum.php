<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;
use Nash\Traits\Stringable;

/**
 * Description of BaseEnum
 *
 * @author geanribeiro
 */
abstract class BaseEnum 
{
    use Stringable;

    public static function getType() 
    {
        return get_class($this);
    }

    public static function getValue($typeName, $value) 
    {
        return self::retrieve($typeName, $value);
    }

    public static function getTitle($typeName, $value) 
    {
        return self::retrieve($typeName, $value, true);
    }

    public static function check($typeName, $value) 
    {
        if (!is_null($value) && is_null(self::retrieve($typeName, $value, true))) 
            {
            throw new Exception("O valor {$value} não está contido nas opções válidas para {$typeName}.");
        }
    }

    private static function retrieve($typeName, $value, $returnKey = false) 
    {
        $class = new ReflectionClass($typeName);
        $constants = $class->getConstants();
        foreach ($constants as $key => $val) 
        {
            $compareKey = str_replace(" ", "", $self::simplify($key));
            $compareValue = str_replace(" ", "", $self::simplify($value));
            
            if ($value === $val || $compareKey === $compareValue) 
            {
                return $returnKey ? $key : $val;
            }
        }
        return null;
    }

}
