<?php

namespace Nash\Services;

use Nash\Models\CentroResultados;
use Nash\Services\AbstractCrudService;

/**
 * Description of CentroResultadosService
 *
 * @author elvislima
 */
class CentroResultadosService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "centroresultados";
    }

    public function entityClassName() 
    {
        return CentroResultados::class;
    }
}