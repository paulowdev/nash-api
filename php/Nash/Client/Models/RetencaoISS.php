<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/BaseEnum.php';

/**
 * Description of RetencaoISS
 *
 * @author elvislima
 */
class RetencaoISS extends BaseEnum {
    const Retem = 1;
    const NaoRetem = 2;
    const Indefinido = 3;
    
    public static function getType() {
        return get_class();
    }
}
