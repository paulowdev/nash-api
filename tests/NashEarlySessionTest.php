<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-30 at 21:09:53.
 */
class NashEarlySessionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var NashEarlySession
     */
    protected $object;
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
        $this->object = new NashEarlySession(self::$config['authenticationPath'], self::$config['servicePath']);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Nash\Client\UserPasswordSession::login
     * @todo Implement testLogin().
     */
    public function testLogin()
    {
        $this->object->login(self::$config);
        $this->assertTrue($this->object->isAuthenticated());
    }
    
    public function testCodigoDeResultadoQuandoLoginBemSucedido() {
        $this->object->login(self::$config);
        $this->assertEquals(SessionInterface::AUTHENTICATION_SUCCESS, $this->object->getResultCode());
    }
    
    public function testCodigoDeResultadoQuandoCredencialFalha() {
        $this->object->login(array("username" => "nash", "password" => "xxxxxx"));
        $this->assertEquals(SessionInterface::INVALID_CREDENTIAL, $this->object->getResultCode());
    }
    
    public function testCodigoDeResultadoQuandoServicoInvalido() {
        $object = new NashEarlySession(self::$config["authenticationPath"] . "/XYZ", self::$config["servicePath"]);
        $object->login(self::$config);
        $this->assertEquals(SessionInterface::SERVICE_NOT_FOUND, $object->getResultCode());
    }

    public function testCodigoDeResultadoQuandoNaoForPossivelEfetuarAutenticacao() {
        $success = true;
        try {
            $object = new NashEarlySession("http://nash12345676543234567.com.br", "http://nash12345676543234567.com.br");
            $object->login(array("username" => "nash", "password" => "xxxxxx"));
        } catch (Exception $e) {
            $success = false;
            $this->assertNotEmpty($e->getMessage());
        }
        $this->assertFalse($success);
    }

    public function testLogout() {
        $this->object->login(self::$config);
        $this->assertTrue($this->object->logout());
    }

    public function testEstadoDoObjetoAposLogout () {
        $this->object->login(self::$config);
        $this->assertTrue($this->object->isAuthenticated());
        $this->assertTrue($this->object->logout());
        $this->assertNull($this->object->getUsername());
        $this->assertEquals(SessionInterface::NOT_AUTHENTICATED, $this->object->getResultCode());
    }
}
