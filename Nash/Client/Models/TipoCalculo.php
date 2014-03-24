<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/BaseEnum.php';

/**
 * Description of TipoCalculo
 *
 * @author geanribeiro
 */
class TipoCalculo extends BaseEnum {
    const Analitico = 0;
    const Sintetico = 1;
    
    public static function getType() {
        return get_class();
    }
}
