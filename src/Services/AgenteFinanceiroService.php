<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgenteFinanceiroService
 *
 * @author elvislima
 */
class AgenteFinanceiroService extends AbstractCrudService {
    public function entityName() {
        return "agentefinanceiro";
    }

    public function entityClassName() {
        return "AgenteFinanceiro";
    }
}