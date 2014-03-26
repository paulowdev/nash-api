<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegimeEspecialTributacao
 *
 * @author elvislima
 */
class RegimeEspecialTributacao extends BaseEnum {
    const Nenhum = 0;
    const MicroempresaMunicipal = 1;
    const Estimativa = 2;
    const SociedadeDeProfissionais = 3;
    const Cooperativa = 4;
    const MicroempresarioIndividual = 5;
    const MicroempresarioEEmpresaDePequenoPorte = 6;
            
    public static function getType() {
        return get_class();
    }
}
