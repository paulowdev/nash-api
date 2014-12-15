<?php

class AgenteFinanceiroServiceTest extends PHPUnit_Framework_TestCase {
    protected $object;
    protected $session;
    protected static $config;
    
    public static function setUpBeforeClass()
    {
        self::$config = require("config.php");
        self::$config = self::$config[self::$config["running"]];
    }
    
    protected function setUp()
    {
        $this->session = new NashEarlySession(self::$config["authenticationPath"], self::$config["servicePath"]);
        $this->session->login(self::$config);
        $this->object = new AgenteFinanceiroService($this->session);        
        
        $empresaService = new EmpresaService($this->session);
        $empresa = $empresaService->getEmpresasSelecionaveis(1, 0)->getModel()->Data[0];
        $empresaService->selecionaEmpresa($empresa->getId());
    }
    
    protected function tearDown()
    {
        $this->session->logout();
    }
    
    public function testConsulta() {
         $result = $this->object->retrieve('', '', '');
         $this->assertGreaterThan(0, count($result->getModel()->Data));
    }
}
