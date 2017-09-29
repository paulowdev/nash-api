<?php

namespace Nash\Models;

use Nash\Models\CentroResultados;
use Nash\Models\Conta;
use Nash\Models\EntidadeComCodigo;
use Nash\Models\UnidadeNegocio;
/**
 * Description of Rateio
 *
 * @author elvislima
 */
class Rateio extends EntidadeComCodigo {

    public $UnidadeNegocio;
    public $UnidadeNegocio_id;
    public $Conta;
    public $Conta_id;
    public $Centro;
    public $Centro_id;
    public $Valor;
    public $Percentual;

    public function getUnidadeNegocio_id() {
        return $this->UnidadeNegocio_id;
    }

    public function getConta_id() {
        return $this->Conta_id;
    }

    public function getCentro_id() {
        return $this->Centro_id;
    }

    public function setUnidadeNegocio_id($UnidadeNegocio_id) {
        $this->UnidadeNegocio_id = $UnidadeNegocio_id;
        return $this;
    }

    public function setConta_id($Conta_id) {
        $this->Conta_id = $Conta_id;
        return $this;
    }

    public function setCentro_id($Centro_id) {
        $this->Centro_id = $Centro_id;
        return $this;
    }

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
        $this->UnidadeNegocio_id = $UnidadeNegocio->Id;
        return $this;
    }

    public function setConta(Conta $Conta) {
        $this->Conta = $Conta;
        if ($Conta)
            $this->Conta_id = $Conta->Id;
        return $this;
    }

    public function setCentro(CentroResultados $CentroResultados) {
        $this->Centro = $CentroResultados;
        if ($CentroResultados)
            $this->Centro_id = $CentroResultados->Id;
        return $this;
    }

    public function setValor($Valor) {
        $this->Valor = $Valor;
        return $this;
    }

}
