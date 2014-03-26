<?php

require_once '../bootstrap.php';

$servicePath = "http://srvaramis/nash";
$session = new NashEarlySession($servicePath);
$service = new ContaService($session);

$session->login(array("username" => "site", "password" => "4321"));

$result = $service->getContasTipo(3, 0, TipoConta::Cliente);
$contas = $result->getModel()->Data;

echo "Total de Registros: {$result->getModel()->Total}\r\n";
echo "Total Apresentado: " . count($result->getModel()->Data) . "\r\n";
print_r($contas);
$session->logout();
