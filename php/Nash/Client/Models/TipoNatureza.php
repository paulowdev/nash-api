<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/BaseEnum.php';

/**
 * Description of TipoNatureza
 *
 * @author geanribeiro
 */
class TipoNatureza extends BaseEnum {
    const Entrada = 0;
    const Saida = 1;
    const Credora = 2;
    const Devedora = 3;
    const NaoImporta = 4;
    
    public static function getType() {
        return get_class();
    }
}
