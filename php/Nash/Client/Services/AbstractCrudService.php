<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ICrudService.php';

require_once dirname(realpath(__FILE__)) .'/../ISession.php';
require_once dirname(realpath(__FILE__)) .'/../Models/Entidade.php';
require_once dirname(realpath(__FILE__)) .'/../Util/ObjectParser.php';
require_once dirname(realpath(__FILE__)) .'/../Result.php';

/**
 * Description of AbstractService
 *
 * @author geanribeiro
 */
abstract class AbstractCrudService implements ICrudService {
    protected $session = null;
    
    public function __construct(ISession $session) {
        $this->session = $session;
    }
    
    public abstract function entityName();
    
    public abstract function entityClassName();

    public function create(Entidade $entity) {
       $result = $this->session->post("/{$this->entityName()}/inclui", ObjectParser::toArray($entity));
       return $this->parseResult($result);
    }

    public function delete($id) {
       $result = $this->session->delete("/{$this->entityName()}/exclui/{$id}");
       return $this->parseResult($result);
    }

    public function read($id) {
       $result = $this->session->get("/{$this->entityName()}/Dados?id={$id}&op=resumo");
       return $this->parseResult($result);
    }

    public function retrieve($take, $skip, $query = "") {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $url = "/{$this->entityName()}/List?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
       
       $url = str_replace("\"", "", $url);
       $result = $this->session->get($url);
       return $this->parseListResult($result);
    }

    public function update(Entidade $entity) {
       $result = $this->session->put("/{$this->entityName()}/altera/{$entity->getId()}", ObjectParser::toArray($entity));
       return $this->parseResult($result);
    }
    
    protected function parseResult($result) {
        if ($result->getStatus() == Result::SUCCESS) {
            $entityClassName = $this->entityClassName();
            
            $result->setModel(new $entityClassName($result->getModel()));
        }
        return $result;
    }
    
    protected function parseListResult($result) {
        $entityName = $this->entityClassName();
        
        if (!is_null($result->getModel())) {
            $dados = $result->getModel()->Data;
            foreach ($dados as $key => $value) {
                $dados[$key] = new $entityName($value);
            }
            $result->getModel()->Data = $dados;
        }
        
        return $result;
    }
}
