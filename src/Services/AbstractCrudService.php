<?php

namespace Nash\Services;

use Nash\SessionInterface;
use Nash\Models\Entidade;
use Nash\Result;
use Nash\Traits\ObjectParseble;

/**
 * Description of AbstractService
 *
 * @author geanribeiro
 */
abstract class AbstractCrudService implements CrudServiceInterface 
{
    use ObjectParseble;

    protected $session = null;
    
    public function __construct(SessionInterface $session) 
    {
        $this->session = $session;
    }
    
    public abstract function entityName();
    
    public abstract function entityClassName();

    public function create(Entidade $entity) 
    {
       $result = $this->session->post("/{$this->entityName()}/inclui", $this::toArray($entity));
       return $result;
    }

    public function delete($id) 
    {
       $result = $this->session->delete("/{$this->entityName()}/exclui/{$id}");
       return $result;
    }

    public function read($id) 
    {
       $result = $this->session->get("/{$this->entityName()}/Dados?id={$id}&op=resumo");
       return $this->parseResult($result);
    }

    public function retrieve($take, $skip, $query = "") 
    {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $url = "/{$this->entityName()}/List?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
       
       $url = str_replace("\"", "", $url);
       $result = $this->session->get($url);
       return $this->parseListResult($result);
    }

    public function update(Entidade $entity) 
    {
       $result = $this->session->put("/{$this->entityName()}/altera/{$entity->getId()}", $self::toArray($entity));
       return $result;
    }
    
    protected function parseResult($result) 
    {
        if ($result->getStatus() == Result::SUCCESS) 
            {
            $entityClassName = $this->entityClassName();
            
            $result->setModel(new $entityClassName($result->getModel()));
        }
        return $result;
    }
    
    protected function parseListResult($result) 
    {
        $entityName = func_num_args() > 1 ? func_get_arg(1) : $this->entityClassName();
        $resultIsArray = is_array($result);
        $dados = $resultIsArray ? $result : (!is_null($result->getModel()) ? $result->getModel()->Data : $result);
        
        if (!is_null($dados)) 
        {
            foreach ($dados as $key => $value) 
            {
                $dados[$key] = new $entityName($value);
            }
            if (!$resultIsArray) 
            {
                $result->getModel()->Data = $dados;
                return $result;
            }
        }
        
        return $dados;
    }
}
