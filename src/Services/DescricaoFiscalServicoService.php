<?php

namespace Nash\Services;

use Nash\Models\DescricaoFiscalServico;

/**
 * Description of DescricaoFiscalServicoService
 *
 * @author elvislima
 */
class DescricaoFiscalServicoService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "descricaofiscalservico";
    }

    public function entityClassName() 
    {
        return DescricaoFiscalServico::class;
    }
}