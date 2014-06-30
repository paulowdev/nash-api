<?php
require_once '../bootstrap.php';

$servicePath = "http://localhost:2140/nash";
$session = new NashEarlySession($servicePath);

$session->login(array("username" => "site", "password" => "4321"));

$servClient = new ClienteService($session);
$servUnidade = new UnidadeNegocioService($session);
$servServico = new ServicoService($session);
$servAgente = new AgenteFinanceiroService($session);
$servCentro = new CentroResultadosService($session);
$servConta = new ContaService($session);
$servContaAReceber = new ContaAReceberService($session);

$unidadeNegocio = $servUnidade->read(1)->getModel();

$contaAReceber = new ContaAReceber();
$contaAReceber->setData(date('Y-m-d'));
$contaAReceber->setObservacao("teste integração nash");
$contaAReceber->setCliente($servClient->read(10781)->getModel());
$contaAReceber->setUnidadeNegocio($unidadeNegocio);

$servicoFaturado = new ServicoFaturado();
$servicoFaturado->setServico($servServico->read(1)->getModel());
$servicoFaturado->setValor(300);
$contaAReceber->setServicos(array($servicoFaturado));

$vencimento = new VencimentoAReceber();
$vencimento->setAgenteFinanceiro($servAgente->read(2)->getModel());
$vencimento->setData(date('Y-m-d'));
$vencimento->setValor(300);
$contaAReceber->setVencimentos(array($vencimento));

$rateio = new Rateio();
$rateio->setUnidadeNegocio($unidadeNegocio);
$rateio->setCentro($servCentro->read(268)->getModel());
$rateio->setConta($servConta->read(441)->getModel());
$rateio->setValor(300);
$contaAReceber->setRateios(array($rateio));

$result = $servContaAReceber->create($contaAReceber);
var_dump($result);

