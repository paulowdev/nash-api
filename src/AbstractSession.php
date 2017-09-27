<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Nash;

use Nash\ISession;

/**
 * Description of AbstractSession
 *
 * @author geanribeiro
 */
abstract class AbstractSession implements ISession {
    private $username = null;
    private $authenticationUrl = null;
    private $serviceUrl = null;
    private $resultCode = ISession::NOT_AUTHENTICATED;
    private $chave = null;

    public function __construct($authenticationUrl, $serviceUrl) {
        $this->authenticationUrl = $authenticationUrl;
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
    
    public function getAuthenticationUrl() {
        return $this->authenticationUrl;
    }

    public function getServiceUrl() {
        return $this->serviceUrl;
    }

    public function getChave() {
        return $this->chave;
    }
    
    protected function setResultCode($code) {
        $this->resultCode = $code;
    }
    
    protected function setUsername($username) {
        $this->username = $username;
    }
    
    protected function setChave($chave) {
        $this->chave = $chave;
    }
}
