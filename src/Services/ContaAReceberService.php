<?php

namespace Nash\Services;

/**
 * Description of ContaAReceberService
 *
 * @author elvislima
 */
class ContaAReceberService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "contaareceber";
    }

    public function entityClassName() 
    {
        return "ContaAReceber";
    }

    public function create(Entidade $entity) 
    {
        $this->session->contentType = "application/json";

        try {
           $json = $entity->toJson();
        } catch (Exception $ex) {
            var_dump($ex);
        }

        $result = $this->session->post("/{$this->entityName()}/inclui", $json);

        return $result;
    }

    public function update(Entidade $entity) 
    {
        $this->session->contentType = "application/json";
        
        $json   = $entity->toJson();
        $result = $this->session->put("/{$this->entityName()}/altera/{$entity->getId()}", $json);

        return $result;
    }
}
