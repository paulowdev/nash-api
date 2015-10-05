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

$empresa = $empresaService->getEmpresasSelecionaveis(1, 0);//->getModel()->Data[0];
print_r($empresa); exit;
$empresaService->selecionaEmpresa($empresa->getId());

$result = $service->retrieve(10, 0); //Terceiro parâmentro de filtro opcional
print_r($result); exit;

$municipios = $result->getModel()->Data;

echo "Total de Registros: {$result->getModel()->Total}\r\n";
echo "Total Apresentado: " . count($result->getModel()->Data) . "\r\n";
print_r($municipios);
$session->logout();
