<?php

namespace Nash\Services;

use Nash\Models\BaixaRealizadaVencimentoAReceber;
use Nash\Services\AbstractCrudService;

/**
 * Description of BaixaVencimentoAReceberService
 *
 * @author elvislima
 */
class BaixaVencimentoAReceberService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "vencimentosreceber";
    }

    public function entityClassName() 
    {
        return BaixaRealizadaVencimentoAReceber::class;
    }       
    
    public function baixar($id, BaixaPendenteVencimentoAReceber $baixa) 
    {
        $contentType = $this->session->contentType;
        $this->session->contentType = "application/json";
        
        $baixa->saveActionUrl = "{$this->entityName()}/{$id}/salvarBaixa";          
        $result = $this->session->put("/{$baixa->saveActionUrl}", $baixa->toJson());       
        
        $this->session->contentType = $contentType;
        return $this->parseResult($result);
    }
    
    public function baixasEfetuadas($idVencimento, $take, $skip, $query = "") {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $result = $this->session->get("/{$this->entityName()}/{$idVencimento}/baixasefetuadas?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}");
       return $this->parseListResult($result);
    }      
        
    public function cancelarBaixa($idVencimento, $idBaixa, $cancelaBaixa) {                  
       $result = $this->session->put("/{$this->entityName()}/{$idVencimento}/cancelarBaixa/{$idBaixa}", $cancelaBaixa->toJson());             
       return $this->parseResult($result);
    }    
}