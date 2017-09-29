<?php

namespace Nash\Models;

use Nash\Models\Conta;
use Nash\Models\Empresa;
use Nash\Models\Cliente;
use Nash\Models\EntidadeComCodigo;
use Nash\Models\UnidadeNegocio;
/**
 * Description of ContaAReceber
 *
 * @author elvislima
 */
class ContaAReceber extends EntidadeComCodigo {

    public $Empresa;
    public $Empresa_id;
    public $Cliente;
    public $Cliente_id;
    public $UnidadeNegocio;
    public $UnidadeNegocio_id;
    public $Data;
    public $Conta;
    public $Conta_id;
    public $Servicos;
    public $Tributos;
    public $Vencimentos;
    public $Rateios;
    public $Observacao;

    public $Anotacao;
    public $Codigo;
    public $ContabilizadoManualmente;
    public $Desconto;
    public $EmitirNotaFiscal;
    public $Status;
    public $Valor;
    public $ValorLiquido;
    public $ValorRetencao;

    public function getCliente_id() {
        return $this->Cliente_id;
    }

    public function getUnidadeNegocio_id() {
        return $this->UnidadeNegocio_id;
    }

    public function getConta_id() {
        return $this->Conta_id;
    }

    public function setCliente_id($Cliente_id) {
        $this->Cliente_id = $Cliente_id;
        return $this;
    }

    public function setUnidadeNegocio_id($UnidadeNegocio_id) {
        $this->UnidadeNegocio_id = $UnidadeNegocio_id;
        return $this;
    }

    public function setConta_id($Conta_id) {
        $this->Conta_id = $Conta_id;
        return $this;
    }

    public function getTributos() {
        return $this->Tributos;
    }

    public function setTributos(array $Tributos = null) {
        $this->Tributos = $Tributos;
        return $this;
    }

    public function getEmpresa() {
        return $this->Empresa;
    }

    public function setEmpresa(Empresa $Empresa = null) {
        $this->Empresa = $Empresa;
        if (!is_null($Empresa))
            $this->Empresa_id = $Empresa->Id;
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
        if ($Cliente)
            $this->Cliente_id = $Cliente->Id;
        return $this;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio = null) {
        $this->UnidadeNegocio = $UnidadeNegocio;
        if ($UnidadeNegocio)
            $this->UnidadeNegocio_id = $UnidadeNegocio->Id;
        return $this;
    }

    public function setData($Data) {
        $this->Data = $Data;
        return $this;
    }

    public function setConta(Conta $Conta = null) {
        $this->Conta = $Conta;
        if ($Conta)
            $this->Conta_id = $Conta->Id;
        return $this;
    }

    public function setServicos(array $Servicos) {
        $this->Servicos = $Servicos;
        return $this;
    }

    public function setVencimentos(array $Vencimentos) {
        $this->Vencimentos = $Vencimentos;
        return $this;
    }

    public function setRateios(array $Receitas) {
        $this->Rateios = $Receitas;
        return $this;
    }

    public function setObservacao($Observacao) {
        $this->Observacao = $Observacao;
        return $this;
    }

}
