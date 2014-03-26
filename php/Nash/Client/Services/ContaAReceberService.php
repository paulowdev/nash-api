<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaAReceberService
 *
 * @author elvislima
 */
class ContaAReceberService extends AbstractCrudService {
    public function entityName() {
        return "contaareceber";
    }

    public function entityClassName() {
        return "ContaAReceber";
    }
    
    public function create(Entidade $entity) {
        $this->session->contentType = "application/json";
        print($entity->toJson());
        $result = $this->session->post("/{$this->entityName()}/inclui", $entity->toJson());        
        return $this->parseResult($result);
    }
}
