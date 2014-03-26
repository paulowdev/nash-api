<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'AbstractCrudService.php';

/**
 * Description of ClienteService
 *
 * @author geanribeiro
 */
class ClienteService extends AbstractCrudService {
    public function entityName() {
        return "cliente";
    }

    public function entityClassName() {
        require_once dirname(realpath(__FILE__)) .'/../Models/Cliente.php';
        return "Cliente";
    }

}
