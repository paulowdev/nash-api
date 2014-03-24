<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VencimentoAReceberService
 *
 * @author elvislima
 */

class VencimentoAReceberService extends AbstractCrudService {
    public function entityName() {
        return "vencimentosreceber";
    }

    public function entityClassName() {
        return "VencimentoAReceber";
    }
}