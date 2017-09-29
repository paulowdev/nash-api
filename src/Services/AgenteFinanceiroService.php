<?php

namespace Nash\Services;

/**
 * Description of AgenteFinanceiroService
 *
 * @author elvislima
 */
class AgenteFinanceiroService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "agentefinanceiro";
    }

    public function entityClassName() 
    {
        return "AgenteFinanceiro";
    }
}