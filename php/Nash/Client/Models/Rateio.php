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

class Rateio extends EntidadeComCodigo {    

    public $UnidadeNegocio;
    public $Conta;
    public $Centro;
    public $Valor;
    public $Percentual;
    
    public function getPercentual() {
        return $this->Percentual;
    }

    public function setPercentual($Percentual) {
        $this->Percentual = $Percentual;
        return $this;
    }

    public function getUnidadeNegocio() {
        return $this->UnidadeNegocio;
    }

    public function getConta() {
        return $this->Conta;
    }

    public function getCentro() {
        return $this->Centro;
    }

    public function getValor() {
        return $this->Valor;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio) {
        $this->UnidadeNegocio = $UnidadeNegocio;
        return $this;
    }

    public function setConta($Conta) {
        $this->Conta = $Conta;
        return $this;
    }

    public function setCentro(CentroResultados $CentroResultados) {
        $this->Centro = $CentroResultados;
        return $this;
    }

    public function setValor($Valor) {
        $this->Valor = $Valor;
        return $this;
    }
}
