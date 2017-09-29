<?php

namespace Nash\Models;

use Nash\Models\Entidade;

/**
 * Description of Banco
 *
 * @author Gean
 */
class Banco extends Entidade {

    public $Nome;
    public $Numero;

    public function getNome() {
        return $this->Nome;
    }

    public function getNumero() {
        return $this->Numero;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function setNumero($Numero) {
        $this->Numero = $Numero;
        return $this;
    }

}
