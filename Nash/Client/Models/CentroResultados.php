<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rateio
 *
 * @author elvislima
 */
class CentroResultados extends EntidadeComCodigo {

    public $Nome;

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

}
