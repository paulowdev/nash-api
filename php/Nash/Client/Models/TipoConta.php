<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) .'/BaseEnum.php';

/**
 * Description of TipoConta
 *
 * @author geanribeiro
 */
class TipoConta extends BaseEnum {
    const Receita = 1;
    const Despesa = 2;
    //TODO: remover tipos abaixo
    const Financeira = 3;
    const Cliente = 4;
    const Fornecedor = 5;
    const Ativo = 6;
    const Passivo = 7;
    const Resultado = 8;
    
    public static function getType() {
        return get_class();
    }
}
