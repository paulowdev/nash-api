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
    public $UnidadeNegocio;
    public $Base;
    public $Aliquota; 
    public $Retem; 
    public $NomeTributo;
    
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
        return $this;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio) {
        $this->UnidadeNegocio = $UnidadeNegocio;
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
        
