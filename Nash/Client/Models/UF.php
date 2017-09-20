<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/Entidade.php';

/**
 * Description of UF
 *
 * @author geanribeiro
 */
class UF extends Entidade {
    public $Nome;
    public $Sigla;
    
    public function getNome() {
        return $this->Nome;
    }

    public function getSigla() {
        return $this->Sigla;
    }

    public function setNome($nome) {
        $this->Nome = $nome;
        return $this;
    }

    public function setSigla($sigla) {
        $this->Sigla = $sigla;
        return $this;
    }
}
