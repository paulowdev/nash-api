<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VencimentoAReceberService
 *
 * @author elvislima
 */
class VencimentoAReceberService extends AbstractCrudService {
    public function entityName() {
        return "vencimentosreceber";
    }

    public function entityClassName() {
        return "VencimentoAReceber";
    }
    
    public function baixar($id, BaixaVencimentoAReceber $baixa) {
       $result = $this->session->put("/{$this->entityName()}/{$id}/salvarBaixa", ObjectParser::toArray($baixa));
       return $this->parseResult($result);
    }
    
    public function vencimentosEmAberto($take, $skip, $query = "") {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $result = $this->session->get("/{$this->entityName()}/FiltroVencimentosEmAberto?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}");
       return $this->parseListResult($result);
    }    
}