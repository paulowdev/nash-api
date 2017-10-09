<?php

namespace Nash\Services;

use Nash\Models\Cliente;
use Nash\Services\AbstractCrudService;

/**
 * Description of ClienteService
 *
 * @author geanribeiro
 */
class ClienteService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "cliente";
    }

    public function entityClassName() 
    {
        return Cliente::class;
    }

}
