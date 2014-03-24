<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ServicoFaturado
 *
 * @author elvislima
 */

class ServicoFaturado extends EntidadeComCodigo {    
    public $servico;
    public $valor;
    
    public function getServico() {
        return $this->servico;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setServico(Servico $servico = null) {
        $this->servico = $servico;
        return $this;
    }

    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }
}
