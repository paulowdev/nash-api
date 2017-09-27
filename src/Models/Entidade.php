<?php
namespace Nash\Models;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Nash\Models\ModelBase;

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
