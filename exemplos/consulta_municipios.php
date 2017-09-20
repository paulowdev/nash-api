<?php

require_once '../bootstrap.php';

$config = require('../config.php');
$config = $config[$config['running']];

$servicePath = $config['servicePath'];
$authenticationPath = $config['authenticationPath'];

$session = new NashEarlySession($authenticationPath, $servicePath);
$service = new MunicipioService($session);
$empresaService = new EmpresaService($session);

$session->login($config);

$empresas = $empresaService->getEmpresasSelecionaveis(1, 0);
$empresaService->selecionaEmpresa($empresas[0]->getId());

$result = $service->retrieve(10, 0); //Terceiro parâmentro de filtro opcional

$municipios = $result->getModel()->Data;

echo "\r\nTotal de Registros: {$result->getModel()->Total}\r\n";
echo "Total Apresentado: " . count($result->getModel()->Data) . "\r\n";
print_r($municipios);
$session->logout();
