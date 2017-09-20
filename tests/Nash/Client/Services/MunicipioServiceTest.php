<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-01-03 at 17:56:19.
 */
class MunicipioServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MunicipioService
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
    protected function setUp()
    {
        $this->session = new NashEarlySession(self::$config["authenticationPath"], self::$config['servicePath']);
        $this->object = new MunicipioService($this->session);
        
        $this->session->login(self::$config);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->session->logout();
    }
    
    public function testPossoRecuperarOsMunicipios() {
        $dados = $this->object->retrieve(10, 0);
        $this->assertInternalType('integer', $dados->getModel()->Total);
        $this->assertGreaterThan(0, count($dados->getModel()->Data));
        $this->assertInstanceOf("Municipio", $dados->getModel()->Data[0]);
    }
    
    public function testPossoRecuperarUmMunicipioPeloNome() {
        $dados = $this->object->retrieve(1, 0, "Fortaleza");
        $this->assertEquals(1, count($dados->getModel()->Data));
        $this->assertInstanceOf("Municipio", $dados->getModel()->Data[0]);
        $this->assertContains("Fortaleza", $dados->getModel()->Data[0]->getNome());
    }
}