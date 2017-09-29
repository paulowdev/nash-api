<?php

namespace Nash\Models;

use Nash\Models\AgenteFinanceiro;
use Nash\Models\Banco;
use Nash\Models\EntidadeComCodigo;

/**
 * Description of VencimentoAReceber
 *
 * @author elvislima
 */
class VencimentoAReceber extends EntidadeComCodigo 
{
    public $AgenteFinanceiro;
    public $AgenteFinanceiro_id;
    public $Data;
    public $Valor;
    public $DataCancelamento;
    public $ObsCancelamento;
    public $Cobranca;
    public $NossoNumeroBoleto;
    public $SequencialNossoNumero;
    public $CodigoCedenteBoleto;
    public $AgenciaBoleto;
    public $ContaCorrenteBoleto;
    public $DigitoVerificadorAgenciaBoleto;
    public $DigitoVerificadorContaBoleto;
    public $NumeroReimpressoesBoleto;
    public $BancoCheque;
    public $BancoCheque_id;
    public $AgenciaCheque;
    public $ContaCorrenteCheque;
    public $NumeroCheque;
    public $TituloCheque;
    public $TitularCheque;
    public $NSU;
    public $UltimosDigitosCartao;
    public $Status;

    public function getCobranca() {
        return $this->Cobranca;
    }

    public function setCobranca($Cobranca) {
        $this->Cobranca = $Cobranca;
        return $this;
    }

    public function getNSU() {
        return $this->NSU;
    }

    public function getUltimosDigitosCartao() {
        return $this->UltimosDigitosCartao;
    }

    public function setNSU($NSU) {
        $this->NSU = $NSU;
        return $this;
    }

    public function setUltimosDigitosCartao($UltimosDigitosCartao) {
        $this->UltimosDigitosCartao = $UltimosDigitosCartao;
        return $this;
    }

    public function getBancoCheque() {
        return $this->BancoCheque;
    }

    public function getAgenciaCheque() {
        return $this->AgenciaCheque;
    }

    public function getContaCorrenteCheque() {
        return $this->ContaCorrenteCheque;
    }

    public function getNumeroCheque() {
        return $this->NumeroCheque;
    }

    public function getTituloCheque() {
        return $this->TituloCheque;
    }

    public function getTitularCheque() {
        return $this->TitularCheque;
    }

    public function setBancoCheque(Banco $BancoCheque = null) {
        $this->BancoCheque = $BancoCheque;
        if ($BancoCheque)
            $this->BancoCheque_id = $BancoCheque->Id;
        return $this;
    }

    public function setAgenciaCheque($AgenciaCheque) {
        $this->AgenciaCheque = $AgenciaCheque;
        return $this;
    }

    public function setContaCorrenteCheque($ContaCorrenteCheque) {
        $this->ContaCorrenteCheque = $ContaCorrenteCheque;
        return $this;
    }

    public function setNumeroCheque($NumeroCheque) {
        $this->NumeroCheque = $NumeroCheque;
        return $this;
    }

    public function setTituloCheque($TituloCheque) {
        $this->TituloCheque = $TituloCheque;
        return $this;
    }

    public function setTitularCheque($TitularCheque) {
        $this->TitularCheque = $TitularCheque;
        return $this;
    }

    public function getDataCancelamento() {
        return $this->DataCancelamento;
    }

    public function getObsCancelamento() {
        return $this->ObsCancelamento;
    }

    public function setDataCancelamento($DataCancelamento) {
        $this->DataCancelamento = $DataCancelamento;
        return $this;
    }

    public function setObsCancelamento($ObsCancelamento) {
        if ($ObsCancelamento = null)
            $this->ObsCancelamento = "";
        else
            $this->ObsCancelamento = $ObsCancelamento;
        return $this;
    }

    public function getNossoNumeroBoleto() {
        return $this->NossoNumeroBoleto;
    }

    public function getSequencialNossoNumero() {
        return $this->SequencialNossoNumero;
    }

    public function getCodigoCedenteBoleto() {
        return $this->CodigoCedenteBoleto;
    }

    public function getAgenciaBoleto() {
        return $this->AgenciaBoleto;
    }

    public function getContaCorrenteBoleto() {
        return $this->ContaCorrenteBoleto;
    }

    public function getDigitoVerificadorAgenciaBoleto() {
        return $this->DigitoVerificadorAgenciaBoleto;
    }

    public function getDigitoVerificadorContaBoleto() {
        return $this->DigitoVerificadorContaBoleto;
    }

    public function getNumeroReimpressoesBoleto() {
        return $this->NumeroReimpressoesBoleto;
    }

    public function getStatus() {
        return $this->Status;
    }

    public function setNossoNumeroBoleto($NossoNumeroBoleto) {
        $this->NossoNumeroBoleto = $NossoNumeroBoleto;
        return $this;
    }

    public function setSequencialNossoNumero($SequencialNossoNumero) {
        $this->SequencialNossoNumero = $SequencialNossoNumero;
        return $this;
    }

    public function setCodigoCedenteBoleto($CodigoCedenteBoleto) {
        $this->CodigoCedenteBoleto = $CodigoCedenteBoleto;
        return $this;
    }

    public function setAgenciaBoleto($AgenciaBoleto) {
        $this->AgenciaBoleto = $AgenciaBoleto;
        return $this;
    }

    public function setContaCorrenteBoleto($ContaCorrenteBoleto) {
        $this->ContaCorrenteBoleto = $ContaCorrenteBoleto;
        return $this;
    }

    public function setDigitoVerificadorAgenciaBoleto($DigitoVerificadorAgenciaBoleto) {
        $this->DigitoVerificadorAgenciaBoleto = $DigitoVerificadorAgenciaBoleto;
        return $this;
    }

    public function setDigitoVerificadorContaBoleto($DigitoVerificadorContaBoleto) {
        $this->DigitoVerificadorContaBoleto = $DigitoVerificadorContaBoleto;
        return $this;
    }

    public function setNumeroReimpressoesBoleto($NumeroReimpressoesBoleto) {
        $this->NumeroReimpressoesBoleto = $NumeroReimpressoesBoleto;
        return $this;
    }

    public function getAgenteFinanceiro() {
        return $this->AgenteFinanceiro;
    }

    public function getData() {
        return $this->Data;
    }

    public function getValor() {
        return $this->Valor;
    }

    public function setAgenteFinanceiro(AgenteFinanceiro $AgenteFinanceiro) {
        $this->AgenteFinanceiro = $AgenteFinanceiro;
        if ($AgenteFinanceiro)
            $this->AgenteFinanceiro_id = $AgenteFinanceiro->Id;
        return $this;
    }

    public function setData($Data) {
        $this->Data = $Data;
        return $this;
    }

    public function setValor($Valor) {
        $this->Valor = $Valor;
        return $this;
    }

    public function setStatus($Status) {
        $this->Status = $Status;
        return $this;
    }

    public function getAgenteFinanceiro_id() {
        return $this->AgenteFinanceiro_id;
    }

    public function getBancoCheque_id() {
        return $this->BancoCheque_id;
    }

    public function setAgenteFinanceiro_id($AgenteFinanceiro_id) {
        $this->AgenteFinanceiro_id = $AgenteFinanceiro_id;
        return $this;
    }

    public function setBancoCheque_id($BancoCheque_id) {
        $this->BancoCheque_id = $BancoCheque_id;
        return $this;
    }

}
