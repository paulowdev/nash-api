<?php

namespace Nash\Services;

use Nash\Models\AgenteFinanceiro;
use Nash\Services\AbstractCrudService;

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
        return AgenteFinanceiro::class;
    }
}