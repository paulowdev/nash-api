<?php

namespace Nash\Models;

use Nash\Models\EntidadeComCodigo;


/**
 * Description of DescricaoFiscalServico
 *
 * @author elvislima
 */
class DescricaoFiscalServico extends EntidadeComCodigo {

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
