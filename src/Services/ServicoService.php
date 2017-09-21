<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicoService
 *
 * @author elvislima
 */
class ServicoService extends AbstractCrudService {
    public function entityName() {
        return "servico";
    }

    public function entityClassName() {
        return "Servico";
    }
}
