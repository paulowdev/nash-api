<?php

namespace Nash\Models;

use Nash\Models\ConfiguracaoSituacaoTributariaISS;
use Nash\Models\DescricaoFiscalServico;
use Nash\Models\EntidadeComCodigo;
use Nash\Models\ParametrizacaoServicosPorMunicipio;

/**
 * Description of Servico
 *
 * @author elvislima
 */
class Servico extends EntidadeComCodigo 
{
    public $Codigo;
    public $DescricaoFiscalServico;
    public $DescricaoFiscalServico_id;
    public $ParametrizacoesDeServicosPorMunicipio;
    public $ConfiguracaoSituacaoTributariaISS;
    public $Nome;

    public $BloquearAlteracaoDoServico;
    public $ComissaoAutomatica;
    public $Comissoes;
    public $QtdDeComissoes;
    public $Servico_id;
    public $TotalDosPercentuais;
    public $Valor;
    public $ValorDasComissoes;

    public function getCodigo() 
    {
        return $this->Codigo;
    }

    public function getDescricaoFiscalServico() 
    {
        return $this->DescricaoFiscalServico;
    }

    public function getParametrizacoesDeServicosPorMunicipio() 
    {
        return $this->ParametrizacoesDeServicosPorMunicipio;
    }

    public function getConfiguracaoSituacaoTributariaISS() 
    {
        return $this->ConfiguracaoSituacaoTributariaISS;
    }

    public function getNome() 
    {
        return $this->Nome;
    }

    public function setCodigo($Codigo) 
    {
        $this->Codigo = $Codigo;
        return $this;
    }

    public function setDescricaoFiscalServico(DescricaoFiscalServico $DescricaoFiscalServico = null) 
    {
        $this->DescricaoFiscalServico = $DescricaoFiscalServico;
        if ($DescricaoFiscalServico) 
        {
            $this->DescricaoFiscalServico_id = $DescricaoFiscalServico->Id;
        }
        return $this;
    }

    public function setParametrizacoesDeServicosPorMunicipio(ParametrizacaoServicosPorMunicipio $ParametrizacoesDeServicosPorMunicipio = null) 
    {
        $this->ParametrizacoesDeServicosPorMunicipio = $ParametrizacoesDeServicosPorMunicipio;
        return $this;
    }

    public function setConfiguracaoSituacaoTributariaISS(ConfiguracaoSituacaoTributariaISS $ConfiguracaoSituacaoTributariaISS = null) 
    {
        $this->ConfiguracaoSituacaoTributariaISS = $ConfiguracaoSituacaoTributariaISS;
        return $this;
    }

    public function setNome($Nome) 
    {
        $this->Nome = $Nome;
        return $this;
    }

}
