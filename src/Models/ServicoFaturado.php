<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicoFaturado
 *
 * @author elvislima
 */
class ServicoFaturado extends EntidadeComCodigo {

    public $Servico;
    public $Servico_id;
    public $Valor;

    public function getServico_id() {
        return $this->Servico_id;
    }

    public function setServico_id($servico_id) {
        $this->Servico_id = $servico_id;
        return $this;
    }

    public function getServico() {
        return $this->Servico;
    }

    public function getValor() {
        return $this->Valor;
    }

    public function setServico(Servico $servico = null) {
        $this->Servico = $servico;
        if ($servico)
            $this->Servico_id = $servico->Id;
        return $this;
    }

    public function setValor($valor) {
        $this->Valor = $valor;
        return $this;
    }

}
