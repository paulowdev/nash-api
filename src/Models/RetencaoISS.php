<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

/**
 * Description of RetencaoISS
 *
 * @author elvislima
 */
class RetencaoISS extends BaseEnum 
{
    const Retem = 1;
    const NaoRetem = 2;
    const Indefinido = 3;
    
    public static function getType() 
    {
        return get_class();
    }
}
