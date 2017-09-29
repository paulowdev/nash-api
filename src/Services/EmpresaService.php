<?php

namespace Nash\Services;

/**
 * Description of EmpresaService
 *
 * @author elvislima
 */
class EmpresaService extends AbstractCrudService 
{
    public function entityName() 
    {
        return "empresa";
    }

    public function entityClassName() 
    {
        return "Empresa";
    }
    
    public function getEmpresasSelecionaveis($take, $skip, $query = "") 
    {
        $q      = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
        $url    = "/SelecaoEmpresa/EmpresasParaUsuario?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
        $url    = str_replace("\"", "", $url);
        $result = $this->session->get($url);

        return $this->parseListResult($result->getModel()->empresas);
    }
    
    public function selecionaEmpresa($empresaId) 
    {
        $contentType = $this->session->contentType;
        $this->session->contentType = "application/json";
        
        $result = $this->session->post("/Home/SelecionaEmpresa", "{empresaId: $empresaId}");
        $this->session->contentType = $contentType;

        return $result;
    }
}
