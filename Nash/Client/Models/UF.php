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
    public $nome;
    public $sigla;
    
    public function getNome() {
        return $this->nome;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
        return $this;
    }
}
