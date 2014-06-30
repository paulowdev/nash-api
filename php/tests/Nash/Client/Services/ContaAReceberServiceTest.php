<?php

class ContaAReceberServiceTest extends PHPUnit_Framework_TestCase
{
    /** * @var ContaAReceberService  */
    protected $object;
    protected $session;
    protected static $contaAReceber = null;
    protected static $config;
    
    public static function setUpBeforeClass()
    {
        self::$config = require("config.php");
        self::$config = self::$config[self::$config["running"]];
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->session = new NashEarlySession(self::$config["servicePath"]);
        $this->session->login(self::$config);
        $this->object = new ContaAReceberService($this->session);        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->session->logout();
    }
    
    ////// Testes //////
    
    public function testCriacaoDeContasAReceber() {
        $contaAReceber = $this->getContaAReceber();
        
        $result = $this->object->create($contaAReceber);               
        
        $this->assertEquals(Result::SUCCESS, $result->getStatus());
        $this->assertNotNull($result->getModel());
        $this->assertInstanceOf("ContaAReceber", $result->getModel());
        
        return $result->getModel();
    }
    
    /**
     * @depends testCriacaoDeContasAReceber
     */
    public function testAtualizacaoDeContasAReceber(ContaAReceber $contaAReceber) {
        $contaAReceberAlterado = $this->object->read($contaAReceber->getId())->getModel();
        $contaAReceberAlterado->setObservacao("Teste de alteração de contas a receber.");
        $contaAReceberAlterado->getServicos()[0]->Valor = 2000;
        $contaAReceberAlterado->getVencimentos()[0]->Valor = 2000;
        $contaAReceberAlterado->getRateios()[0]->Valor = 2000;
        
        $result = $this->object->update($contaAReceberAlterado);
        
        $this->assertEquals(Result::SUCCESS, $result->getStatus());
        $this->assertNotNull($result->getModel());
        
        $contaAReceberAlterado = $result->getModel();
        
        $this->assertInstanceOf("ContaAReceber", $contaAReceberAlterado);
        $this->assertEquals("Teste de alteração de contas a receber.", $contaAReceberAlterado->getObservacao());
        $this->assertEquals(2000, $contaAReceberAlterado->getServicos()[0]->Valor);
        $this->assertEquals(2000, $contaAReceberAlterado->getVencimentos()[0]->Valor);
        $this->assertEquals(2000, $contaAReceberAlterado->getRateios()[0]->Valor);
        
        return $contaAReceberAlterado;
    }
    
    /**
     * @depends testAtualizacaoDeContasAReceber
     */
    public function testExclusaoDeContasAReceber(ContaAReceber $contaAReceber) {
        $result = $this->object->delete($contaAReceber->getId());
        $this->assertEquals(Result::SUCCESS, $result->getStatus());
    }
    
    
    ////// Recursos //////    
    
    private function getContaAReceber() {
        $contaAReceber = new ContaAReceber();
                
        $contaAReceber->setEmpresa($this->getEmpresa());   
        $contaAReceber->setData("2014-01-02");        
        $contaAReceber->setObservacao("conta a receber de teste");       
        $contaAReceber->setCliente($this->getCliente());
        $contaAReceber->setUnidadeNegocio($this->getUnidadeNegocio());
        $contaAReceber->setConta($this->getConta(TipoConta::Financeira));
        $contaAReceber->setServicos($this->getServicos());    
        $contaAReceber->setVencimentos($this->getVencimentosAReceber());
        $contaAReceber->setRateios($this->getReceitas());
        
        return $contaAReceber;
    }
    
    function getEmpresa(){
        $service = new EmpresaService($this->session);
        $result = $service->read(1);
        $empresa = $result->getModel();
        
        return $empresa;
    }
    
    private function getReceitas(){       
        $rateio = new Rateio();
        $rateio->setUnidadeNegocio($this->getUnidadeNegocio());
        $rateio->setCentro($this->getCentroResultados());
        $rateio->setConta($this->getConta(TipoConta::Receita));
        $rateio->setValor(1000);
        
        $lista = array($rateio);
        
        return $lista;        
    }
    
    private function getCentroResultados(){
        $service = new CentroResultadosService($this->session);
        $result = $service->read(10);
        //$result = $service->retrieve(1, 0);
        $centroResultados = $result->getModel();
        
        return $centroResultados;
    }   
    
    private function getVencimentosAReceber() {
        $service = new AgenteFinanceiroService($this->session);
        $result = $service->retrieve(1, 0);
        $agenteFinanceiro = $result->getModel()->Data[0];
        
        $vencimento = new VencimentoAReceber();
        $vencimento->setAgenteFinanceiro($agenteFinanceiro);
        $vencimento->setData("2014-01-12");
        $vencimento->setValor(1000);
        
        $lista = array($vencimento);
        
        return $lista;
    }
    
    private function getServicos() {
        $service = new ServicoService($this->session);
        $result = $service->retrieve(1, 0);
        $servico = $result->getModel()->Data[0];
               
        $servicoFaturado = new ServicoFaturado();
        $servicoFaturado->setServico($servico);
        $servicoFaturado->setValor(1000);
        
        $lista = array($servicoFaturado);                
        return $lista;
    }
    
    private function getConta($tipo) {
        $service = new ContaService($this->session);
        $result = $service->getContasTipo(1, 0, $tipo, "Calculo:Analitico");
        $conta = $result->getModel()->Data[0];
        return $conta;
    }    
    
    private function getMunicipio() {
        $service = new MunicipioService($this->session);
        $result = $service->retrieve(1, 0);
        $municipio = $result->getModel()->Data[0];
        return $municipio;
    }
    
    private function getCliente() {
        $service = new ClienteService($this->session);
        $result = $service->retrieve(1, 0);
        $cliente = $result->getModel()->Data[0];
        return $cliente;
    }
    
    private function getUnidadeNegocio() {
        $service = new UnidadeNegocioService($this->session);
        $result = $service->retrieve(1, 0);
        $unidadeNegocio = $result->getModel()->Data[0];
        return $unidadeNegocio;
    }
}
