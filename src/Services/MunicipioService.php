<?php

namespace Nash\Services;

use Nash\Models\Municipio;

/**
 * Description of MunicipioService
 *
 * @author geanribeiro
 */
class MunicipioService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "municipio";
    }

    public function entityClassName() 
    {
        return "Municipio";
    }

}
