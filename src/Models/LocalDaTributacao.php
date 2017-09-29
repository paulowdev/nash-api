<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

/**
 * Description of TipoDaSituacaoTributariaISS
 *
 * @author elvislima
 */
class LocalDaTributacao extends BaseEnum 
{
    const DentroDoMunicipio = 0;
    const ForaDoMunicipio = 1;

    public static function getType() 
    {
        return get_class();
    }

}
