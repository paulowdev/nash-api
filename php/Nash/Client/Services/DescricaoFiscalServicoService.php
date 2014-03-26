<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DescricaoFiscalServicoService
 *
 * @author elvislima
 */
class DescricaoFiscalServicoService extends AbstractCrudService {
    public function entityName() {
        return "descricaofiscalservico";
    }

    public function entityClassName() {
        return "DescricaoFiscalServico";
    }
}