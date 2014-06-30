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
        $this->session = new NashEarlySession(self::$config["servicePath"]);
        $this->session->login(self::$config);
        $this->object = new AgenteFinanceiroService($this->session);        
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
