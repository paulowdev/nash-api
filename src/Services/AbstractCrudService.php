<?php

namespace Nash\Services;

use Nash\SessionInterface;
use Nash\Models\Entidade;
use Nash\Models\Result;
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
       return $this->session->delete("/{$this->entityName()}/exclui/{$id}");
    }

    public function read($id)
    {
       $result = $this->session->get("/{$this->entityName()}/Dados?id={$id}&op=resumo");

       return $this->parseResult($result);
    }

    public function retrieve($take, $skip, $query = "")
    {
       $q       = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $url     = "/{$this->entityName()}/List?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
       $url     = str_replace("\"", "", $url);
       $result  = $this->session->get($url);

       return $this->parseListResult($result);
    }

    public function update(Entidade $entity)
    {
       return $this->session->put("/{$this->entityName()}/altera/{$entity->getId()}", $self::toArray($entity));
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
        $dados      = is_array($result) ? $result : (is_null($result->getModel()) ? $result: $result->getModel()->Data);

        if(is_null($dados))
            return $dados;

        foreach ($dados as $key => $value){
            $dados[$key] = new $entityName($value);
        }

        if (!is_array($result)) {
            $result->getModel()->Data = $dados;
            return $result;
        }

        return $dados;
    }
}
