<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) . '/Entidade.php';

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
