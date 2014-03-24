<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'AbstractCrudService.php';

/**
 * Description of ContaService
 *
 * @author geanribeiro
 */
class ContaService extends AbstractCrudService {
    public function entityName() {
        return "conta";
    }
    
    public function entityClassName() {
        require_once dirname(realpath(__FILE__)) .'/../Models/Conta.php';
        return "Conta";
    }
    
    public function getContasTipo($take, $skip, $tipo, $query = "") {
        $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
        $result = $this->session->get("/{$this->entityName()}/{$tipo}/contas?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}");
        return $this->parseListResult($result);
    }
}
