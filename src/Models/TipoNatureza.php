<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

/**
 * Description of TipoNatureza
 *
 * @author geanribeiro
 */
class TipoNatureza extends BaseEnum 
{
    const Entrada = 0;
    const Saida = 1;
    const Credora = 2;
    const Devedora = 3;
    const NaoImporta = 4;
    
    public static function getType() 
    {
        return get_class();
    }
}
