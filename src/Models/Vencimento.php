<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) . '/Entidade.php';

/**
 * Description of Conta
 *
 * @author rubensgadelha
 */
class Vencimento extends Entidade {

    public $Baixas;
    public $ContaFinanceiraId;
    public $Data;
    public $Juros;
    public $Multa;
    public $TipoDeDocumentoId;
    public $Valor;
    public $ValorEmAberto;
    public $ValorPago;
}
