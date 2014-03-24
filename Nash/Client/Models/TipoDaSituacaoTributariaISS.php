<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoDaSituacaoTributariaISS
 *
 * @author elvislima
 */

class TipoDaSituacaoTributariaISS extends BaseEnum {
    const Tributada = 0;
    const Cancelada = 1;
    const Anulada = 2;
    const Isenta = 3;
    const Retida = 4;
    const PagamentoPeloPrestador = 5;
    const Imune = 6;
    const SuspensaoJudicial = 7;
    
    public static function getType() {
        return get_class();
    }
}
