<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

/**
 * Description of TipoConta
 *
 * @author geanribeiro
 */
class TipoConta extends BaseEnum 
{
    const Receita = 1;
    const Despesa = 2;
    const Financeira = 3;
    const Cliente = 4;
    const Fornecedor = 5;
    const Ativo = 6;
    const Passivo = 7;
    const Resultado = 8;
    
    public static function getType() 
    {
        return get_class();
    }
}
