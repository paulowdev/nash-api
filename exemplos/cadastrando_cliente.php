<?php

require_once '../bootstrap.php';

$servicePath = "http://srvaramis/nash";
$session = new NashEarlySession($servicePath);
$service = new ClienteService($session);
$municipioService = new MunicipioService($session);
$contaService = new ContaService($session);

$session->login(array("username" => "site", "password" => "4321"));

$cliente = new Cliente(array(
    "RazaoSocial" => "Cliente Exemplo",
    "CPFCNPJ" => "00000000000",
    "Municipio.Id" => $municipioService->retrieve(1, 0, "Nome:Fortaleza")->getModel()->Data[0]->getId(),
    "Logradouro" => "Rua das Laranjeiras",
    "Conta.Id" => $contaService->getContasTipo(1, 0, TipoConta::Cliente, "Calculo:Analitico")->getModel()->Data[0]->getId()
));

/** SINTAXE ALTERNATIVA
$cliente->setRazaoSocial("Cliente Exemplo")
        ->setCPFCNPJ("00000000000")
        ->setMunicipio($municipioService->retrieve(3, 0, "Nome:Fortaleza")->getModel()->Data[2])
        ->setLogradouro("Rua das Laranjeiras")
        ->setConta($contaService->getContasTipo(1, 0, TipoConta::Cliente, "Calculo:Analitico")->getModel()->Data[0]);
*/

//cria cliente
$result = $service->create($cliente);
print_r($result);
$cliente = $result->getModel();

//remove cliente
$result = $service->delete($cliente->getId());
if ($result->getStatus() == Result::SUCCESS) {
    echo "\r\nCliente com Id = {$cliente->getId()} foi removido!\r\n";
} else {
    echo "\r\nFalha ao remover o cliente com Id={$cliente->getId()}!\r\n";
}

$session->logout();
