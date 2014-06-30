<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) . '/Participante.php';

/**
 * Description of Cliente
 *
 * @author geanribeiro
 */
class Cliente extends Participante {

    public $Codigo;
    public $InscricaoMunicipal;
    public $Conta;
    public $Conta_id;
    public $ContaPadrao;
    public $ContaPadrao_id;
    public $RetencaoISS;

    public function getContaPadrao_id() {
        return $this->ContaPadrao_id;
    }

    public function setContaPadrao_id($ContaPadrao_id) {
        $this->ContaPadrao_id = $ContaPadrao_id;
        return $this;
    }

    public function getRetencaoISS() {
        return $this->RetencaoISS;
    }

    public function setRetencaoISS($RetencaoISS = null) {
        RetencaoISS::check(RetencaoISS::getType(), $RetencaoISS);
        $this->RetencaoISS = RetencaoISS::getValue(RetencaoISS::getType(), $RetencaoISS);
        return $this;
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getInscricaoMunicipal() {
        return $this->InscricaoMunicipal;
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

    public function setConta(Conta $Conta = null) {
        $this->Conta = $Conta;
        if ($Conta)
            $this->Conta_id = $Conta->Id;
        return $this;
    }

    public function setContaPadrao(Conta $ContaPadrao = null) {
        $this->ContaPadrao = $ContaPadrao;
        if ($ContaPadrao)
            $this->ContaPadrao_id = $ContaPadrao->Id;
        return $this;
    }

    public function getConta_id() {
        return $this->Conta_id;
    }

    public function setConta_id($Conta_id) {
        $this->Conta_id = $Conta_id;
        return $this;
    }

}
