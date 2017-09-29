<?php

namespace Nash\Traits;

/**
 * Description of ArrayEx
 *
 * @author Gean
 */
trait Arrayable 
{
    public static function transform(array $array, $deep = false) {
        $result = array();

        foreach ($array as $key => $value) {
            if (is_object($value)) {
                if (array_key_exists("{$key}_id", $array))
                    continue;
                if ($deep || !($value instanceof Entidade)) {
                    $result[$key] = $self::transform(get_object_vars($value));
                } else {
                    $result[$key] = array("Id" => $value->getId());
                }
            } else if (is_array($value)) {
                $result[$key] = $self::transform($value, !$deep);
            } else if (!is_null($value)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

}
