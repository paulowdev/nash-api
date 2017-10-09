<?php

namespace Nash\Services;

use Nash\Models\VencimentoAReceber;
use Nash\Models\VencimentoAbertoAReceber;
use Nash\Traits\ObjectParseble;
/**
 * Description of VencimentoAReceberService
 *
 * @author elvislima
 */
class VencimentoAReceberService extends AbstractCrudService
{
    use ObjectParseble;

    public function entityName() {
        return "vencimentosreceber";
    }

    public function entityClassName() {
        return VencimentoAReceber::class;
    }

    public function leanEntityClassName(){
        return VencimentoAbertoAReceber::class;
    }

    public function baixar($id, BaixaVencimentoAReceber $baixa)
    {
       $result = $this->session->put("/{$this->entityName()}/{$id}/salvarBaixa", $self::toArray($baixa));
       return $this->parseResult($result);
    }

    public function vencimentosEmAberto($take, $skip, $query = "")
    {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $result = $this->session->get("/{$this->entityName()}/FiltroVencimentosEmAberto?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}");

       return $this->parseListResult($result, $this->leanEntityClassName());
    }
}