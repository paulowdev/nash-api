<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgenteFinanceiro
 *
 * @author elvislima
 */

class AgenteFinanceiro extends EntidadeComCodigo {    
    
    public $Codigo;
    public $Nome;   
    
    public $Agencia;
    public $DigitoVerificadorAgencia;    
    public $ContaCorrente;
    public $DigitoVerificadorConta;
    public $CodigoCedente;            
    public $SequencialNossoNumero;    
    public $NossoNumeroBoleto;    
    
    public function getAgencia() {
        return $this->Agencia;
    }

    public function getDigitoVerificadorAgencia() {
        return $this->DigitoVerificadorAgencia;
    }

    public function getContaCorrente() {
        return $this->ContaCorrente;
    }

    public function getDigitoVerificadorConta() {
        return $this->DigitoVerificadorConta;
    }

    public function getCodigoCedente() {
        return $this->CodigoCedente;
    }

    public function getSequencialNossoNumero() {
        return $this->SequencialNossoNumero;
    }

    public function getNossoNumeroBoleto() {
        return $this->NossoNumeroBoleto;
    }

    public function setAgencia($Agencia) {
        $this->Agencia = $Agencia;
        return $this;
    }

    public function setDigitoVerificadorAgencia($DigitoVerificadorAgencia) {
        $this->DigitoVerificadorAgencia = $DigitoVerificadorAgencia;
        return $this;
    }

    public function setContaCorrente($ContaCorrente) {
        $this->ContaCorrente = $ContaCorrente;
        return $this;
    }

    public function setDigitoVerificadorConta($DigitoVerificadorConta) {
        $this->DigitoVerificadorConta = $DigitoVerificadorConta;
        return $this;
    }

    public function setCodigoCedente($CodigoCedente) {
        $this->CodigoCedente = $CodigoCedente;
        return $this;
    }

    public function setSequencialNossoNumero($SequencialNossoNumero) {
        $this->SequencialNossoNumero = $SequencialNossoNumero;
        return $this;
    }

    public function setNossoNumeroBoleto($NossoNumeroBoleto) {
        $this->NossoNumeroBoleto = $NossoNumeroBoleto;
        return $this;
    }

        public function getCodigo() {
        return $this->Codigo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }   
}
