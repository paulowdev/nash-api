<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ISession.php';

/**
 * Description of AbstractSession
 *
 * @author geanribeiro
 */
abstract class AbstractSession implements ISession {
    private $username = null;
    private $serviceUrl = null;
    private $resultCode = ISession::NOT_AUTHENTICATED;

    public function __construct($serviceUrl) {
        $this->serviceUrl = $serviceUrl;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function isAuthenticated() {
        return $this->getResultCode() == ISession::AUTHENTICATION_SUCCESS;
    }
    
    public function getResultCode() {
        return $this->resultCode;
    }

    public function getServiceUrl() {
        return $this->serviceUrl;
    }
    
    protected function setResultCode($code) {
        $this->resultCode = $code;
    }
    
    protected function setUsername($username) {
        $this->username = $username;
    }
}
