<?php

namespace Nash\Models;

/**
 * Description of CancelaBaixa
 *
 * @author elvislima
 */
class CancelaBaixa 
{
    public $DataCancelamento;
    public $Motivo;

    public function toJson() {
        return json_encode(get_object_vars($this));
    }

    public function getDataCancelamento() {
        return $this->DataCancelamento;
    }

    public function getMotivo() {
        return $this->Motivo;
    }

    public function setDataCancelamento($DataCancelamento) {
        $this->DataCancelamento = $DataCancelamento;
        return $this;
    }

    public function setMotivo($Motivo) {
        $this->Motivo = $Motivo;
        return $this;
    }

}
