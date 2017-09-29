<?php

namespace Nash\Models;

use Nash\Models\Entidade;
use Nash\Models\Municipio;

/**
 * Description of Participante
 *
 * @author geanribeiro
 */
class Participante extends Entidade {

    public $ParticipanteId;
    public $CPFCNPJ;
    public $Logradouro;
    public $Numero;
    public $Bairro;
    public $Municipio;
    public $Municipio_id;
    public $CEP;
    public $Complemento;
    public $Telefone;
    public $Email;
    public $NomeFantasia;
    public $RazaoSocial;

    public function getParticipanteId() 
    {
        return $this->ParticipanteId;
    }

    public function getCPFCNPJ() 
    {
        return $this->CPFCNPJ;
    }

    public function getLogradouro() 
    {
        return $this->Logradouro;
    }

    public function getNumero() 
    {
        return $this->Numero;
    }

    public function getBairro() 
    {
        return $this->Bairro;
    }

    public function getMunicipio() 
    {
        return $this->Municipio;
    }

    public function getCEP() 
    {
        return $this->CEP;
    }

    public function getComplemento() 
    {
        return $this->Complemento;
    }

    public function getTelefone() 
    {
        return $this->Telefone;
    }

    public function getEmail() 
    {
        return $this->Email;
    }

    public function getNomeFantasia() 
    {
        return $this->NomeFantasia;
    }

    public function getRazaoSocial() 
    {
        return $this->RazaoSocial;
    }

    public function setParticipanteId($ParticipanteId) 
    {
        $this->ParticipanteId = $ParticipanteId;
        return $this;
    }

    public function setCPFCNPJ($CPFCNPJ) 
    {
        $this->CPFCNPJ = $CPFCNPJ;
        return $this;
    }

    public function setLogradouro($Logradouro) 
    {
        $this->Logradouro = $Logradouro;
        return $this;
    }

    public function setNumero($Numero) 
    {
        $this->Numero = $Numero;
        return $this;
    }

    public function setBairro($Bairro) 
    {
        $this->Bairro = $Bairro;
        return $this;
    }

    public function setMunicipio($Municipio = null) 
    {
        if (is_object($Municipio)) 
        {
            $this->Municipio = new Municipio($Municipio);
            $this->Municipio_id = $Municipio->Id;
        } else {
            $this->Municipio = $Municipio;
        }
        return $this;
    }

    public function setCEP($CEP) 
    {
        $this->CEP = $CEP;
        return $this;
    }

    public function setComplemento($Complemento) 
    {
        $this->Complemento = $Complemento;
        return $this;
    }

    public function setTelefone($Telefone) 
    {
        $this->Telefone = $Telefone;
        return $this;
    }

    public function setEmail($Email) 
    {
        $this->Email = $Email;
        return $this;
    }

    public function setNomeFantasia($NomeFantasia) 
    {
        $this->NomeFantasia = $NomeFantasia;
        return $this;
    }

    public function setRazaoSocial($RazaoSocial) 
    {
        $this->RazaoSocial = $RazaoSocial;
        return $this;
    }

    public function getMunicipio_id() 
    {
        return $this->Municipio_id;
    }

    public function setMunicipio_id($Municipio_id) 
    {
        $this->Municipio_id = $Municipio_id;
        return $this;
    }

}
