<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/Entidade.php';

/**
 * Description of Municipio
 *
 * @author geanribeiro
 */
class Municipio extends Entidade {
    public $Nome;
    public $Codigo;
    public $UF;
    
    public function getNome() {
        return $this->Nome;
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getUF() {
        return $this->UF;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setUF(UF $UF = null) {
        $this->UF = $UF;
        return $this;
    }
}
