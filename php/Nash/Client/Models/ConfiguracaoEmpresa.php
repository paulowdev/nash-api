<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/ModelBase.php';

/**
 * Description of Empresa
 *
 * @author geanribeiro
 */
class ConfiguracaoEmpresa extends ModelBase {
    public $Nome;
    public $MascaraPlanoContas;
    public $MascaraCentroResultados;
    public $PodeAlterarMascaraPlanoContas;
    public $PodeAlterarMascaraCentroResultados;
    public $ContaCliente;
    public $ContaFornecedor;

    public function getNome() {
        return $this->Nome;
    }

    public function getMascaraPlanoContas() {
        return $this->MascaraPlanoContas;
    }

    public function getMascaraCentroResultados() {
        return $this->MascaraCentroResultados;
    }

    public function getPodeAlterarMascaraPlanoContas() {
        return $this->PodeAlterarMascaraPlanoContas;
    }

    public function getPodeAlterarMascaraCentroResultados() {
        return $this->PodeAlterarMascaraCentroResultados;
    }

    public function getContaCliente() {
        return $this->ContaCliente;
    }

    public function getContaFornecedor() {
        return $this->ContaFornecedor;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function setMascaraPlanoContas($MascaraPlanoContas) {
        $this->MascaraPlanoContas = $MascaraPlanoContas;
        return $this;
    }

    public function setMascaraCentroResultados($MascaraCentroResultados) {
        $this->MascaraCentroResultados = $MascaraCentroResultados;
        return $this;
    }

    public function setPodeAlterarMascaraPlanoContas($PodeAlterarMascaraPlanoContas) {
        $this->PodeAlterarMascaraPlanoContas = $PodeAlterarMascaraPlanoContas;
        return $this;
    }

    public function setPodeAlterarMascaraCentroResultados($PodeAlterarMascaraCentroResultados) {
        $this->PodeAlterarMascaraCentroResultados = $PodeAlterarMascaraCentroResultados;
        return $this;
    }

    public function setContaCliente(Conta $ContaCliente = null) {
        $this->ContaCliente = $ContaCliente;
        return $this;
    }

    public function setContaFornecedor(Conta $ContaFornecedor = null) {
        $this->ContaFornecedor = $ContaFornecedor;
        return $this;
    }
}
