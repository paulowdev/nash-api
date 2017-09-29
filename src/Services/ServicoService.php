<?php

namespace Nash\Services;

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
        return "Servico";
    }
}
