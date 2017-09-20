<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
