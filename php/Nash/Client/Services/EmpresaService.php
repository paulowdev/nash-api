<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaService
 *
 * @author elvislima
 */
class EmpresaService extends AbstractCrudService {
    public function entityName() {
        return "empresa";
    }

    public function entityClassName() {
        return "Empresa";
    }

}
