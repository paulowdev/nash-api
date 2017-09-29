<?php

namespace Nash\Models;

use Nash\Models\Entidade;
/**
 * Description of UF
 *
 * @author geanribeiro
 */
class UF extends Entidade 
{
    public $Nome;
    public $Sigla;
    
    public function getNome() 
    {
        return $this->Nome;
    }

    public function getSigla() 
    {
        return $this->Sigla;
    }

    public function setNome($nome) 
    {
        $this->Nome = $nome;
        return $this;
    }

    public function setSigla($sigla) 
    {
        $this->Sigla = $sigla;
        return $this;
    }
}
