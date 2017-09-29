<?php

namespace Nash\Services;

use Nash\Models\ConfiguracaoEmpresa;

/**
 * Description of ConfiguracaoEmpresa
 *
 * @author geanribeiro
 */
class ConfiguracaoEmpresaService extends AbstractCrudService 
{
    public function entityClassName() 
    {
        return "ConfiguracaoEmpresa";
    }

    public function entityName() 
    {
        return "configuracaoempresa";
    }
    
    public function getConfiguracao() 
    {
        $result = $this->session->get("/{$this->entityName()}/inicio");
        
        return $this->parseResult($result);
    }
}
