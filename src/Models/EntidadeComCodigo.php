<?php

namespace Nash\Models;

use Nash\Models\Entidade;

/**
 * Description of EntidadeDaEmpresa
 *
 * @author geanribeiro
 */
class EntidadeComCodigo extends Entidade {

    public $Codigo;
    public $CodigoNoUltimoNivel;

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getCodigoNoUltimoNivel() {
        return $this->CodigoNoUltimoNivel;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setCodigoNoUltimoNivel($CodigoNoUltimoNivel) {
        $this->CodigoNoUltimoNivel = $CodigoNoUltimoNivel;
        return $this;
    }

}
