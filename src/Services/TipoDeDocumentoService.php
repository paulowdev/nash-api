<?php

namespace Nash\Services;

use Nash\Models\TipoDeDocumento;

/**
 * Description of ContaService
 *
 * @author rubensgadelha
 */
class TipoDeDocumentoService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "tipodedocumento";
    }
    
    public function entityClassName() 
    {
        return TipoDeDocumento::class;
    }
}
