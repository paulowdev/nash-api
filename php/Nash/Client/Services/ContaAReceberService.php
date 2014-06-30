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
        $json = $entity->toJson();
        
        $result = $this->session->post("/{$this->entityName()}/inclui", $json);        
        return $this->parseResult($result);
    }
    
    public function update(Entidade $entity) {
        $this->session->contentType = "application/json";  
        $json = $entity->toJson();
        
        $result = $this->session->put("/{$this->entityName()}/altera/{$entity->getId()}", $json);        
        return $this->parseResult($result);
    }
}
