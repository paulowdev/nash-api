<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfiguracaoSituacaoTributariaISS
 *
 * @author elvislima
 */
class ConfiguracaoSituacaoTributariaISS extends EntidadeComCodigo {

    public $UnidadeNegocio;
    public $UnidadeNegocio_id;
    public $TipoDaSituacaoTributariaISS;
    public $LocalDaTributacao;

    public function getUnidadeNegocio_id() {
        return $this->UnidadeNegocio_id;
    }

    public function setUnidadeNegocio_id($UnidadeNegocio_id) {
        $this->UnidadeNegocio_id = $UnidadeNegocio_id;
        return $this;
    }

    public function getUnidadeNegocio() {
        return $this->UnidadeNegocio;
    }

    public function getTipoDaSituacaoTributariaISS() {
        return $this->TipoDaSituacaoTributariaISS;
    }

    public function getLocalDaTributacao() {
        return $this->LocalDaTributacao;
    }

    public function setUnidadeNegocio(UnidadeNegocio $UnidadeNegocio) {
        $this->UnidadeNegocio = $UnidadeNegocio;
        if ($UnidadeNegocio)
            $this->UnidadeNegocio_id = $UnidadeNegocio->Id;
        return $this;
    }

    public function setTipoDaSituacaoTributariaISS($TipoDaSituacaoTributariaISS) {
        $this->TipoDaSituacaoTributariaISS = $TipoDaSituacaoTributariaISS;
        return $this;
    }

    public function setLocalDaTributacao($LocalDaTributacao) {
        $this->LocalDaTributacao = $LocalDaTributacao;
        return $this;
    }

}
