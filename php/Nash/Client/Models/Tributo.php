<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tributo
 *
 * @author elvislima
 */
class Tributo extends EntidadeComCodigo {

    public $Cliente;
    public $Cliente_id;
    public $UnidadeNegocio;
    public $UnidadeNegocio_id;
    public $Base;
    public $Aliquota;
    public $Retem;
    public $NomeTributo;

    public $Valor;
    public $ValorRetido;

    public function getCliente_id() {
        return $this->Cliente_id;
    }

    public function getUnidadeNegocio_id() {
        return $this->UnidadeNegocio_id;
    }

    public function setCliente_id($Cliente_id) {
        $this->Cliente_id = $Cliente_id;
        return $this;
    }

    public function setUnidadeNegocio_id($UnidadeNegocio_id) {
        $this->UnidadeNegocio_id = $UnidadeNegocio_id;
        return $this;
    }

    public function getNomeTributo() {
        return $this->NomeTributo;
    }

    public function setNomeTributo($NomeTributo) {
        $this->NomeTributo = $NomeTributo;
        return $this;
    }

    public function getCliente() {
        return $this->Cliente;
    }

    public function getUnidadeNegocio() {
        return $this->UnidadeNegocio;
    }

    public function getBase() {
        return $this->Base;
    }

    public function getAliquota() {
        return $this->Aliquota;
    }

    public function getRetem() {
        return $this->Retem;
    }

    public function setCliente(Cliente $Cliente) {
        $this->Cliente = $Cliente;
        if ($Cliente) {
            $this->Cliente_id = $Cliente->Id;
        }
        return $this;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio) {
        $this->UnidadeNegocio = $UnidadeNegocio;
        if ($UnidadeNegocio) {
            $this->UnidadeNegocio_id = $UnidadeNegocio->Id;
        }
        return $this;
    }

    public function setBase($Base) {
        $this->Base = $Base;
        return $this;
    }

    public function setAliquota($Aliquota) {
        $this->Aliquota = $Aliquota;
        return $this;
    }

    public function setRetem($Retem) {
        $this->Retem = $Retem;
        return $this;
    }

}
