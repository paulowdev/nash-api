<?php

namespace Nash\Models;

use Nash\Models\Conta;
use Nash\Models\ModelBase;

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
    public $ContaCliente_id;
    public $ContaFornecedor;
    public $ContaFornecedor_id;

    public function getContaCliente_id() {
        return $this->ContaCliente_id;
    }

    public function getContaFornecedor_id() {
        return $this->ContaFornecedor_id;
    }

    public function setContaCliente_id($ContaCliente_id) {
        $this->ContaCliente_id = $ContaCliente_id;
        return $this;
    }

    public function setContaFornecedor_id($ContaFornecedor_id) {
        $this->ContaFornecedor_id = $ContaFornecedor_id;
        return $this;
    }

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
        if ($ContaCliente)
            $this->ContaCliente_id = $ContaCliente->Id;
        return $this;
    }

    public function setContaFornecedor(Conta $ContaFornecedor = null) {
        $this->ContaFornecedor = $ContaFornecedor;
        if ($ContaFornecedor)
            $this->ContaFornecedor_id = $ContaFornecedor->Id;
        return $this;
    }

}
