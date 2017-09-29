<?php

namespace Nash\Models;

use Nash\Models\Entidade;

/**
 * Description of Empresa
 *
 * @author elvislima
 */
class Empresa extends Entidade {

    public $Codigo;
    public $Nome;

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

}
