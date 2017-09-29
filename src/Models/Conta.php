<?php

namespace Nash\Models;

use Nash\Models\TipoConta;
use Nash\Models\TipoCalculo;
use Nash\Models\TipoNatureza;
use Nash\Models\EntidadeComCodigo;

/**
 * Description of Conta
 *
 * @author geanribeiro
 */
class Conta extends EntidadeComCodigo {

    public $Tipo;
    public $Nome;
    public $Calculo;
    public $Natureza;
    public $Grupo;
    public $Grupo_id;

    public function getGrupo_id() {
        return $this->Grupo_id;
    }

    public function setGrupo_id($Grupo_id) {
        $this->Grupo_id = $Grupo_id;
        return $this;
    }

    public function getTipo() {
        return $this->Tipo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getCalculo() {
        return $this->Calculo;
    }

    public function getNatureza() {
        return $this->Natureza;
    }

    public function getGrupo() {
        return $this->Grupo;
    }

    public function setTipo($Tipo = null) {
        TipoConta::check(TipoConta::getType(), $Tipo);
        $this->Tipo = TipoConta::getValue(TipoConta::getType(), $Tipo);
        return $this;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function setCalculo($Calculo = null) {
        TipoCalculo::check(TipoCalculo::getType(), $Calculo);
        $this->Calculo = TipoCalculo::getValue(TipoCalculo::getType(), $Calculo);
        return $this;
    }

    public function setNatureza($Natureza = null) {
        TipoNatureza::check(TipoNatureza::getType(), $Natureza);
        $this->Natureza = TipoNatureza::getValue(TipoNatureza::getType(), $Natureza);
        return $this;
    }

    public function setGrupo(Conta $Grupo = null) {
        $this->Grupo = $Grupo;
        if ($Grupo)
            $this->Grupo_id = $Grupo->Id;
        return $this;
    }

}
