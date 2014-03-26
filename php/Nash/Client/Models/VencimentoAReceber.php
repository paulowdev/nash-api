<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VencimentoAReceber
 *
 * @author elvislima
 */

class VencimentoAReceber extends EntidadeComCodigo {    
    
   public $AgenteFinanceiro;
   public $Data;
   public $Valor;
   
   public function getAgenteFinanceiro() {
       return $this->AgenteFinanceiro;
   }

   public function getData() {
       return $this->Data;
   }

   public function getValor() {
       return $this->Valor;
   }

   public function setAgenteFinanceiro($AgenteFinanceiro) {
       $this->AgenteFinanceiro = $AgenteFinanceiro;
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
}
