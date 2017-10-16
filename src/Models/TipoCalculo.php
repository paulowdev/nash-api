<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

/**
 * Description of TipoCalculo
 *
 * @author geanribeiro
 */
class TipoCalculo extends BaseEnum
{
    const Analitico = 0;
    const Sintetico = 1;

    public static function getType()
    {
        return get_class();
    }
}
