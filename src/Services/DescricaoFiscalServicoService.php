<?php

namespace Nash\Services;

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
        return "DescricaoFiscalServico";
    }
}