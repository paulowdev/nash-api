<?php

namespace Nash\Services;

use Nash\Models\Cliente;

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
        return "Cliente";
    }

}
