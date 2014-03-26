<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/EntidadeComCodigo.php';
require_once dirname(realpath(__FILE__)) .'/TipoConta.php';
require_once dirname(realpath(__FILE__)) .'/TipoNatureza.php';
require_once dirname(realpath(__FILE__)) .'/TipoCalculo.php';

/**
 * Description of Conta
 *
 * @author geanribeiro
 */
class Conta extends EntidadeComCodigo {
    public $Tipo;
    public $Nome;
    public $Calculo;
    public $Natureza;
    public $Grupo;
    
    public function getTipo() {
        return $this->Tipo;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getCalculo() {
        return $this->Calculo;
    }

    public function getNatureza() {
        return $this->Natureza;
    }

    public function getGrupo() {
        return $this->Grupo;
    }

    public function setTipo($Tipo = null) {
        TipoConta::check(TipoConta::getType(), $Tipo);
        $this->Tipo = TipoConta::getValue(TipoConta::getType(), $Tipo);
        return $this;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
        return $this;
    }

    public function setCalculo($Calculo = null) {
        TipoCalculo::check(TipoCalculo::getType(), $Calculo);
        $this->Calculo = TipoCalculo::getValue(TipoCalculo::getType(), $Calculo);
        return $this;
    }

    public function setNatureza($Natureza = null) {
        TipoNatureza::check(TipoNatureza::getType(), $Natureza);
        $this->Natureza = TipoNatureza::getValue(TipoNatureza::getType(), $Natureza);
        return $this;
    }

    public function setGrupo(Conta $Grupo = null) {
        $this->Grupo = $Grupo;
        return $this;
    }


}
