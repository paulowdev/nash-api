<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaixaRealizadaVencimentoAReceber
 *
 * @author elvislima
 */
class BaixaRealizadaVencimentoAReceber extends EntidadeComCodigo {

    public $DataCancelamento;
    public $ValorNominal;
    public $Conta;
    public $Conta_id;
    public $Observacao;
    public $Cancelada;
    public $VencimentoAReceber_id;

    public function getDataCancelamento() {
        return $this->DataCancelamento;
    }

    public function getValorNominal() {
        return $this->ValorNominal;
    }

    public function getConta() {
        return $this->Conta;
    }

    public function getObservacao() {
        return $this->Observacao;
    }

    public function getCancelada() {
        return $this->Cancelada;
    }

    public function getVencimentoAReceber_id() {
        return $this->VencimentoAReceber_id;
    }

    public function setDataCancelamento($DataCancelamento) {
        $this->DataCancelamento = $DataCancelamento;
        return $this;
    }

    public function setValorNominal($ValorNominal) {
        $this->ValorNominal = $ValorNominal;
        return $this;
    }

    public function setConta(Conta $Conta) {
        $this->Conta = $Conta;
        if ($Conta)
            $this->Conta_id = $Conta->Id;
        return $this;
    }

    public function setObservacao($Observacao) {
        $this->Observacao = $Observacao;
        return $this;
    }

    public function setCancelada($Cancelada) {
        $this->Cancelada = $Cancelada;
        return $this;
    }

    public function setVencimentoAReceber_id($VencimentoAReceber_id) {
        $this->VencimentoAReceber_id = $VencimentoAReceber_id;
        return $this;
    }

}
