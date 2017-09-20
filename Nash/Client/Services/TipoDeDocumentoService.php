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
 * @author rubensgadelha
 */
class TipoDeDocumentoService extends AbstractCrudService {
    public function entityName() {
        return "tipodedocumento";
    }
    
    public function entityClassName() {
        require_once dirname(realpath(__FILE__)) .'/../Models/TipoDeDocumento.php';
        return "TipoDeDocumento";
    }
}
