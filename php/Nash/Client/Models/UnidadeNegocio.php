<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaAReceber
 *
 * @author elvislima
 */
class UnidadeNegocio extends EntidadeComCodigo {

    public $Codigo;
    public $CNPJ;
    public $InscricaoMunicipal;
    public $RazaoSocial;
    public $NomeFantasia;
    public $Logradouro;
    public $Numero;
    public $NumeroRPSInicial;
    public $Complemento;
    public $Bairro;
    public $Municipio;
    public $Municipio_id;
    public $Serie;
    public $CEP;
    public $Telefone;
    public $Email;
    public $RegimeEspecialTributacao;
    public $AliquotaIR;
    public $AliquotaISS;
    public $OptantePeloSimplesNacional;
    public $IncetivadorCultural;
    public $RamoAtividade;

    //protected $ChaveLicenca1; ?
    //protected $ChaveLicenca2; ?
    //protected $ExigibilidadeISS; ?

    public function getMunicipio_id() {
        return $this->Municipio_id;
    }

    public function setMunicipio_id($Municipio_id) {
        $this->Municipio_id = $Municipio_id;
        return $this;
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getCNPJ() {
        return $this->CNPJ;
    }

    public function getInscricaoMunicipal() {
        return $this->InscricaoMunicipal;
    }

    public function getRazaoSocial() {
        return $this->RazaoSocial;
    }

    public function getNomeFantasia() {
        return $this->NomeFantasia;
    }

    public function getLogradouro() {
        return $this->Logradouro;
    }

    public function getNumero() {
        return $this->Numero;
    }

    public function getNumeroRPSInicial() {
        return $this->NumeroRPSInicial;
    }

    public function getComplemento() {
        return $this->Complemento;
    }

    public function getBairro() {
        return $this->Bairro;
    }

    public function getMunicipio() {
        return $this->Municipio;
    }

    public function getSerie() {
        return $this->Serie;
    }

    public function getCEP() {
        return $this->CEP;
    }

    public function getTelefone() {
        return $this->Telefone;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getRegimeEspecialTributacao() {
        return $this->RegimeEspecialTributacao;
    }

    public function getAliquotaIR() {
        return $this->AliquotaIR;
    }

    public function getAliquotaISS() {
        return $this->AliquotaISS;
    }

    public function getOptantePeloSimplesNacional() {
        return $this->OptantePeloSimplesNacional;
    }

    public function getIncetivadorCultural() {
        return $this->IncetivadorCultural;
    }

    public function getRamoAtividade() {
        return $this->RamoAtividade;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
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

    public function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
        return $this;
    }

    public function setLogradouro($Logradouro) {
        $this->Logradouro = $Logradouro;
        return $this;
    }

    public function setNumero($Numero) {
        $this->Numero = $Numero;
        return $this;
    }

    public function setNumeroRPSInicial($NumeroRPSInicial) {
        $this->NumeroRPSInicial = $NumeroRPSInicial;
        return $this;
    }

    public function setComplemento($Complemento) {
        $this->Complemento = $Complemento;
        return $this;
    }

    public function setBairro($Bairro) {
        $this->Bairro = $Bairro;
        return $this;
    }

    public function setMunicipio(Municipio $Municipio = null) {
        $this->Municipio = $Municipio;
        if ($Municipio) {
            $this->Municipio_id = $Municipio->Id;
        }
        return $this;
    }

    public function setSerie($Serie) {
        $this->Serie = $Serie;
        return $this;
    }

    public function setCEP($CEP) {
        $this->CEP = $CEP;
        return $this;
    }

    public function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
        return $this;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
        return $this;
    }

    public function setRegimeEspecialTributacao($RegimeEspecialTributacao) {
        $this->RegimeEspecialTributacao = $RegimeEspecialTributacao;
        return $this;
    }

    public function setAliquotaIR($AliquotaIR) {
        $this->AliquotaIR = $AliquotaIR;
        return $this;
    }

    public function setAliquotaISS($AliquotaISS) {
        $this->AliquotaISS = $AliquotaISS;
        return $this;
    }

    public function setOptantePeloSimplesNacional($OptantePeloSimplesNacional) {
        $this->OptantePeloSimplesNacional = $OptantePeloSimplesNacional;
        return $this;
    }

    public function setIncetivadorCultural($IncetivadorCultural) {
        $this->IncetivadorCultural = $IncetivadorCultural;
        return $this;
    }

    public function setRamoAtividade($RamoAtividade) {
        $this->RamoAtividade = $RamoAtividade;
        return $this;
    }

}
