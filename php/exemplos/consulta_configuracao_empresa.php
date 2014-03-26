<?php

require_once '../bootstrap.php';

$servicePath = "http://srvaramis/nash";
$session = new NashEarlySession($servicePath);
$service = new ConfiguracaoEmpresaService($session);

$session->login(array("username" => "site", "password" => "4321"));

$result = $service->getConfiguracao();
$configuracao = $result->getModel();

print_r($configuracao);
$session->logout();
