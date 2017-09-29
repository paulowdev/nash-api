<?php

namespace Nash\Models;

use Nash\Models\EntidadeComCodigo;
use Nash\Models\Municipio;

/**
 * Description of ParametrizacaoServicosPorMunicipio
 *
 * @author elvislima
 */
class ParametrizacaoServicosPorMunicipio extends EntidadeComCodigo {

    public $Municipio;
    public $Municipio_id;
    public $CodTributacaoMunicipal;
    public $AliquotaISS;

    public function getMunicipio_id() {
        return $this->Municipio_id;
    }

    public function setMunicipio_id($Municipio_id) {
        $this->Municipio_id = $Municipio_id;
        return $this;
    }

    public function getMunicipio() {
        return $this->Municipio;
    }

    public function getCodTributacaoMunicipal() {
        return $this->CodTributacaoMunicipal;
    }

    public function getAliquotaISS() {
        return $this->AliquotaISS;
    }

    public function setMunicipio(Municipio $Municipio) {
        $this->Municipio = $Municipio;
        if ($Municipio)
            $this->Municipio_id = $Municipio->Id;
        return $this;
    }

    public function setCodTributacaoMunicipal($CodTributacaoMunicipal) {
        $this->CodTributacaoMunicipal = $CodTributacaoMunicipal;
        return $this;
    }

    public function setAliquotaISS($AliquotaISS) {
        $this->AliquotaISS = $AliquotaISS;
        return $this;
    }

}
