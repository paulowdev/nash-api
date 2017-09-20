<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoService
 *
 * @author Gean
 */
class BancoService extends AbstractCrudService {
    public function entityName() {
        return "Banco";
    }

    public function entityClassName() {
        return $this->entityName();
    }
    
    public function retrieve($take, $skip, $query = "") {
       $q = is_null($query) || empty($query) || !$query ? "" : "q={$query}&";
       $url = "/{$this->entityName()}/Grid?{$q}take={$take}&skip={$skip}&page=" . ($skip + 1) . "&pageSize={$take}";
       
       $url = str_replace("\"", "", $url);
       $result = $this->session->get($url);
       return $this->parseListResult($result);
    }
}
