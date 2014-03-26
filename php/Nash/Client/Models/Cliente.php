<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/Participante.php';

/**
 * Description of Cliente
 *
 * @author geanribeiro
 */
class Cliente extends Participante {
    public $Codigo;
    public $InscricaoMunicipal;
    public $RazaoSocial;
    public $RetemISS;
    public $NomeFantasia;
    public $Conta;
    public $ContaPadrao;
    
    public function getCodigo() {
        return $this->Codigo;
    }

    public function getInscricaoMunicipal() {
        return $this->InscricaoMunicipal;
    }

    public function getRazaoSocial() {
        return $this->RazaoSocial;
    }

    public function getRetemISS() {
        return $this->RetemISS;
    }

    public function getNomeFantasia() {
        return $this->NomeFantasia;
    }

    public function getConta() {
        return $this->Conta;
    }

    public function getContaPadrao() {
        return $this->ContaPadrao;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setInscricaoMunicipal($InscricaoMunicipal) {
        $this->InscricaoMunicipal = $InscricaoMunicipal;
        return $this;
    }

    public function setRazaoSocial($RazaoSocial) {
        $this->RazaoSocial = $RazaoSocial;
        return $this;
    }

    public function setRetemISS($RetemISS) {
        $this->RetemISS = $RetemISS;
        return $this;
    }

    public function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
        return $this;
    }

    public function setConta(Conta $Conta = null) {
        $this->Conta = $Conta;
        return $this;
    }

    public function setContaPadrao(Conta $ContaPadrao = null) {
        $this->ContaPadrao = $ContaPadrao;
        return $this;
    }
}
