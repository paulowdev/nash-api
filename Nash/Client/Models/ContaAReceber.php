<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaAReceber
 *
 * @author elvislima
 */

class ContaAReceber extends EntidadeComCodigo {    
        
    public $Empresa;
    public $Cliente;
    public $UnidadeNegocio;
    public $Data;
    public $Conta;
    public $Servicos;  
    public $Tributos;
    public $Vencimentos;
    public $Rateios;    
    public $Observacao;
    
    public function getTributos() {
        return $this->Tributos;
    }

    public function setTributos($Tributos) {
        $this->Tributos = $Tributos;
        return $this;
    }
    
    public function getEmpresa() {
        return $this->Empresa;
    }

    public function setEmpresa(Empresa $Empresa) {
        $this->Empresa = $Empresa;
        return $this;
    }     

    public function getCliente() {
        return $this->Cliente;
    }

    public function getUnidadeNegocio() {
        return $this->UnidadeNegocio;
    }

    public function getData() {
        return $this->Data;
    }

    public function getConta() {
        return $this->Conta;
    }

    public function getServicos() {
        return $this->Servicos;
    }

    public function getVencimentos() {
        return $this->Vencimentos;
    }

    public function getRateios() {
        return $this->Rateios;
    }

    public function getObservacao() {
        return $this->Observacao;
    }

    public function setCliente(Cliente $Cliente = null) {
        $this->Cliente = $Cliente;
        return $this;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio = null) {
        $this->UnidadeNegocio = $UnidadeNegocio;
        return $this;
    }

    public function setData($Data) {
        $this->Data = $Data;
        return $this;
    }

    public function setConta(Conta $Conta = null) {
        $this->Conta = $Conta;
        return $this;
    }

    public function setServicos($Servicos) {
        $this->Servicos = $Servicos;
        return $this;
    }

    public function setVencimentos($Vencimentos) {
        $this->Vencimentos = $Vencimentos;
        return $this;
    }

    public function setRateios($Receitas) {
        $this->Rateios = $Receitas;
        return $this;
    }

    public function setObservacao($Observacao) {
        $this->Observacao = $Observacao;
        return $this;
    }


}