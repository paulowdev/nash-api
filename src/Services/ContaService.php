<?php

namespace Nash\Services;

use Nash\Models\Conta;
/**
 * Description of ContaService
 *
 * @author geanribeiro
 */
class ContaService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "conta";
    }
    
    public function entityClassName() 
    {
        return "Conta";
    }
    
    public function getContasTipo($take, $skip, $tipo, $query = "") 
    {
        $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
        $result = $this->session->get("/{$this->entityName()}/{$tipo}/contas?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}");
        return $this->parseListResult($result);
    }
}
