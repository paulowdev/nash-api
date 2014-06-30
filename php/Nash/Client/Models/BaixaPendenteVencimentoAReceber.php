<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaixaPendenteVencimentoAReceber
 *
 * @author elvislima
 */
class BaixaPendenteVencimentoAReceber {

    public $saveActionUrl;
    public $Data;
    public $ValorNominal;
    public $Conta;
    public $Conta_id;
    public $Observacao;
    public $VencimentoReceberId;
    public $VencimentoId;
    public $Juros;
    public $Multa;
    public $Desconto;
    public $Tarifa;

    public function getConta_id() {
        return $this->Conta_id;
    }

    public function setConta_id($Conta_id) {
        $this->Conta_id = $Conta_id;
        return $this;
    }

    public function getTarifa() {
        return $this->Tarifa;
    }

    public function setTarifa($Tarifa) {
        $this->Tarifa = $Tarifa;
        return $this;
    }

    public function getJuros() {
        return $this->Juros;
    }

    public function getMulta() {
        return $this->Multa;
    }

    public function getDesconto() {
        return $this->Desconto;
    }

    public function setJuros($Juros) {
        $this->Juros = $Juros;
        return $this;
    }

    public function setMulta($Multa) {
        $this->Multa = $Multa;
        return $this;
    }

    public function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
        return $this;
    }

    public function toJson() {
        return json_encode(get_object_vars($this));
    }

    public function getVencimentoId() {
        return $this->VencimentoId;
    }

    public function setVencimentoId($VencimentoId) {
        $this->VencimentoId = $VencimentoId;
        return $this;
    }

    public function getData() {
        return $this->Data;
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

    public function getVencimentoReceberId() {
        return $this->VencimentoReceberId;
    }

    public function setData($Data) {
        $this->Data = $Data;
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

    public function setVencimentoReceberId($VencimentoReceberId) {
        $this->VencimentoReceberId = $VencimentoReceberId;
        return $this;
    }

}
