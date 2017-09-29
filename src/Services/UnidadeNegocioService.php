<?php

namespace Nash\Services;

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
        return "UnidadeNegocio";
    }
}