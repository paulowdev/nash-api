<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CentroResultadosService
 *
 * @author elvislima
 */
class CentroResultadosService extends AbstractCrudService {
    public function entityName() {
        return "centroresultados";
    }

    public function entityClassName() {
        return "CentroResultados";
    }
}