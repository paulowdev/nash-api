<?php

namespace Nash\Services;

use Nash\Models\Servico;

/**
 * Description of ServicoService
 *
 * @author elvislima
 */
class ServicoService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "servico";
    }

    public function entityClassName() 
    {
        return Servico:class;
    }
}
