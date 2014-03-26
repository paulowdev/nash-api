<?php

require_once '../bootstrap.php';

$servicePath = "http://srvaramis/nash";
$session = new NashEarlySession($servicePath);
$service = new MunicipioService($session);

$session->login(array("username" => "site", "password" => "4321"));

$result = $service->retrieve(3, 0, "Nome:Fortaleza"); //Terceiro parâmentro de filtro opcional
$municipios = $result->getModel()->Data;

echo "Total de Registros: {$result->getModel()->Total}\r\n";
echo "Total Apresentado: " . count($result->getModel()->Data) . "\r\n";
print_r($municipios);
$session->logout();
