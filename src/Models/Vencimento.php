<?php

namespace Nash\Models;

use Nash\Models\Entidade;

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
