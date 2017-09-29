<?php

namespace Nash\Models;

use Nash\Models\BaseEnum;

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
