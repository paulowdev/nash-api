<?php

namespace Nash\Services;

use Nash\Models\ContaFinanceira;

/**
 * Description of ContaService
 *
 * @author rubensgadelha
 */
class ContaFinanceiraService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "contafinanceira";
    }
    
    public function entityClassName() 
    {
        return "ContaFinanceira";
    }
}
