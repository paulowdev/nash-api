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
class LocalDaTributacao extends BaseEnum {
    const DentroDoMunicipio = 0;
    const ForaDoMunicipio = 1;
    
    public static function getType() {
        return get_class();
    }
}
