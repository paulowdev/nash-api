<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnidadeNeogocioService
 *
 * @author elvislima
 */
class UnidadeNegocioService extends AbstractCrudService {
    public function entityName() {
        return "unidadenegocio";
    }

    public function entityClassName() {
        return "UnidadeNegocio";
    }
}