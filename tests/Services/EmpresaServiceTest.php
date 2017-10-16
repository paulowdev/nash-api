<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-12-15 at 20:17:40.
 */
class EmpresaServiceTest extends PHPUnit_Framework_TestCase {

    /**
     * @var EmpresaService
     */
    protected $object;
    protected $session;
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
    protected function setUp() {
        $this->session = new NashEarlySession(self::$config["authenticationPath"], self::$config['servicePath']);
        $this->object = new EmpresaService($this->session);
        
        $this->session->login(self::$config);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        $this->session->logout();
    }

    /**
     * @covers EmpresaService::getEmpresasSelecionaveis
     */
    public function testGetEmpresasSelecionaveis() {
        $result = $this->object->getEmpresasSelecionaveis(1, 0);
        $this->assertGreaterThan(0, count($result));
        
        return $result[0];
    }

    /**
     * @covers EmpresaService::selecionaEmpresa
     * @depends testGetEmpresasSelecionaveis
     */
    public function testSelecionaEmpresa(Empresa $empresa) {
        $result = $this->object->selecionaEmpresa($empresa->getId());
        $this->assertEquals(Result::SUCCESS, $result->getStatus());
    }

}