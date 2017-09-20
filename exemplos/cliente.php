<?php

require_once '../bootstrap.php';

$config = require('../config.php');
$config = $config[$config['running']];

$servicePath = $config['servicePath'];
$authenticationPath = $config['authenticationPath'];

$session = new NashEarlySession($authenticationPath, $servicePath);
$service = new ClienteService($session);
$empresaService = new EmpresaService($session);

$session->login($config);
//var_dump($session);

$empresas = $empresaService->getEmpresasSelecionaveis(1, 0);
$empresaService->selecionaEmpresa($empresas[0]->getId());

$cliente = getCliente($session);
$result = $service->create($cliente);

print_r($result->getStatus());
print_r($result->getModel());

function getMunicipio($session1) {
    $service1 = new MunicipioService($session1);
    $result1 = $service1->retrieve(1, 0);
    $municipio = $result1->getModel()->Data[0];
    return $municipio;
}
    
function getCliente($session2) {
    $cliente = new Cliente();
    $cliente->setNomeFantasia("Nome do Cliente");
    $cliente->setRazaoSocial("Nome do Cliente");
    $cliente->setCPFCNPJ("00000000000000");
    $cliente->setLogradouro("Rua xxx do yyy");
    
    //lookups
    $cliente->setMunicipio_id(getMunicipio($session2)->Id);
    
    return $cliente;
}
