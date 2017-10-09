<?php

namespace Nash\Services;

use Nash\Models\UnidadeNegocio;

/**
 * Description of UnidadeNeogocioService
 *
 * @author elvislima
 */
class UnidadeNegocioService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "unidadenegocio";
    }

    public function entityClassName() 
    {
        return UnidadeNegocio::class;
    }
}