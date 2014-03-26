<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParametrizacaoServicosPorMunicipio
 *
 * @author elvislima
 */
      
class ParametrizacaoServicosPorMunicipio extends EntidadeComCodigo {    

    public $Municipio;
    public $CodTributacaoMunicipal;
    public $AliquotaISS;
    
    public function getMunicipio() {
        return $this->Municipio;
    }

    public function getCodTributacaoMunicipal() {
        return $this->CodTributacaoMunicipal;
    }

    public function getAliquotaISS() {
        return $this->AliquotaISS;
    }

    public function setMunicipio($Municipio) {
        $this->Municipio = $Municipio;
        return $this;
    }

    public function setCodTributacaoMunicipal($CodTributacaoMunicipal) {
        $this->CodTributacaoMunicipal = $CodTributacaoMunicipal;
        return $this;
    }

    public function setAliquotaISS($AliquotaISS) {
        $this->AliquotaISS = $AliquotaISS;
        return $this;
    }
}
