<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)) . '/ModelBase.php';

/**
 * Description of Entidade
 *
 * @author geanribeiro
 */
class Entidade extends ModelBase {

    public $Id;
    public $Inativo = false;

    public function getId() {
        return $this->Id;
    }

    public function getInativo() {
        return $this->Inativo;
    }

    public function setId($Id) {
        $this->Id = $Id;
        return $this;
    }

    public function setInativo($Inativo) {
        $this->Inativo = $Inativo;
        return $this;
    }

}
