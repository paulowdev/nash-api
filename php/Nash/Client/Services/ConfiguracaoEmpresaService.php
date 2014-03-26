<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'AbstractCrudService.php';

/**
 * Description of ConfiguracaoEmpresa
 *
 * @author geanribeiro
 */
class ConfiguracaoEmpresaService extends AbstractCrudService {
    public function entityClassName() {
        require_once dirname(realpath(__FILE__)) .'/../Models/ConfiguracaoEmpresa.php';
        return "ConfiguracaoEmpresa";
    }

    public function entityName() {
        return "configuracaoempresa";
    }
    
    public function getConfiguracao() {
        $result = $this->session->get("/{$this->entityName()}/inicio");
        return $this->parseResult($result);
    }
}
