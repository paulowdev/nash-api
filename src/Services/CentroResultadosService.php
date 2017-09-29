<?php

namespace Nash\Services;

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
        return "CentroResultados";
    }
}