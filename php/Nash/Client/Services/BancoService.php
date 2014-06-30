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
}
