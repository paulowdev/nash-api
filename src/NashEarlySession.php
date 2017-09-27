<?php

namespace Nash;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Nash\AbstractSession;
use Nash\Isession;
use Nash\Util\HTTPSock;
use Nash\Result;

/**
 * Description of newPHPClass
 *
 * @author geanribeiro
 */
class NashEarlySession extends AbstractSession {
    
    protected $httpObject = null;
    protected $cookies = array();
    private $serviceUrl = null;
    private $authenticationUrl = null;
    public $contentType = "application/x-www-form-urlencoded";

    public function __construct($authenticationUrl, $serviceUrl)
    {   
        parent::__construct($authenticationUrl, $serviceUrl);
    }
    
    public function login (array $params) {
        $this->makeRequest($this->getAuthenticationUrl()."/Login?continue=https%3A%2F%2Fcore.fortesinformatica.com.br", "POST", array(
            "Login" => $params["username"],
            "Senha" => $params["password"],
            "fingerprint" => "core-api"
        ));
        $this->processLoginResult($params);
    }

    public function logout() {
        $result = false;
        if ($this->isAuthenticated()) {
            $this->get('/Home/Logout');
            switch($this->getHttpObject()->getStatus()) {
                case 200:
                    $this->clear();
                    $result = true;
                    break;
                case 302:
                    $location = $this->getHttpObject()->headers['Location'];
                    $this->makeRequest($location, "GET", array());
                    
                    $this->clear();
                    $result = true;
                    break;
            }
        }
        return $result;
    }

    public function delete($servicePath, $params = array()) {
        return $this->doAction($servicePath, "DELETE", $params);
    }

    public function get($servicePath, $params = array()) {
        return $this->doAction($servicePath, "GET", $params);
    }

    public function post($servicePath, $params = array()) {
        return $this->doAction($servicePath, "POST", $params);
    }

    public function put($servicePath, $params = array()) {
        return $this->doAction($servicePath, "PUT", $params);
    }
    
    public function doAction($servicePath, $method, $params = array()) {
        $http = $this->getHttpObject(true);
        $http->cookies = $this->cookies;
        $http->HTTPRequest($method, $this->getServiceUrl() . $servicePath, $params);
        return $this->processResult();
    }
    
    protected function makeRequest ($url, $method, array $params = array()) {
        $http = $this->getHttpObject(true);
        $http->cookies = $this->cookies;
        $http->HTTPRequest($method, $url, $params);
        $this->cookies = $this->getHttpObject()->cookies;
    }

    protected function getHttpObject($new = false) {
        $this->httpObject = $new || $this->httpObject == null ? new HTTPSock() : $this->httpObject;
        $this->httpObject->contentType = $this->contentType;
        return $this->httpObject;
    }
    
    protected function clear() {
        $this->httpObject = null;
        $this->setUsername(null);
        $this->setResultCode(ISession::NOT_AUTHENTICATED);
        $this->cookies = array();
    }
    
    protected function processLoginResult(array $params) {
        switch($this->getHttpObject()->getStatus()) {
            case 200: case 401:
                $this->setResultCode(ISession::INVALID_CREDENTIAL);
                break;
            case 301:
            case 302:
                $http = $this->getHttpObject();
                $location = $http->headers['Location'];
                
                if (strcasecmp("/", trim($location)) === 0) {
                    $this->setUsername($params["username"]);
                    $this->setResultCode(ISession::AUTHENTICATION_SUCCESS);
                    break;
                } else if (strpos($location, 'http') === 0) {
                    $location = str_replace('http:', 'https:', $location);
                    $location = str_replace(':80', '', $location);
                    $this->makeRequest($location, "GET", array());
                } else if (strpos(trim($location), '/Home/Autenticar') === 0) {
                    $this->makeRequest($this->getServiceUrl().$http->headers['Location'], "GET", array());
                } else {
                    $this->makeRequest($this->getAuthenticationUrl().$http->headers['Location'], "GET", array());
                }
                
                $this->processLoginResult($params);
                break;
            case 404:
                $this->setResultCode(ISession::SERVICE_NOT_FOUND);
                break;
            case 408:
                $this->setResultCode(ISession::TIMEOUT);
                break;
            default:
                $this->setResultCode(ISession::NOT_AUTHENTICATED);
                break;
        }
    }
    
    protected function processResult() {
        $method = "get" . $this->getHttpObject()->getStatus();
        return method_exists($this, $method) ? $this->$method() : $this->get500();
    }
    
    protected function getSuccess() {
        $content = $this->getHttpObject()->getContent();
        return new Result(Result::SUCCESS, is_null($content) ? null : json_decode($content));
    }
    
    protected function get200() {
        return $this->getSuccess();
    }
    
    protected function get201() {
        return new Result(Result::SUCCESS, json_decode($this->getHttpObject()->getContent()));
    }
    
    protected function get302() {
        return $this->getSuccess();
    }
    
    protected function get400() {
        
        $content = trim($this->getHttpObject()->getContent());
        
        $erros = json_decode($content, true);
        $erro = array();

        if (is_array($erros)) {
            if (key_exists("Erros", $erros) && is_array($erros["Erros"])){
                foreach ($erros["Erros"] as $key => $value) {
                    array_push($erro, "{$key} - {$value}");
                }
            } else if (key_exists("Erros", $erros)) {
                array_push($erro, $erros["Erros"]);
            }
            
            if (key_exists("Mensagem", $erros) && is_array($erros["Mensagem"])){
                foreach ($erros["Mensagem"] as $key => $value) {
                    array_push($erro, "{$key} - {$value}");
                }
            } else if (key_exists("Mensagem", $erros)){
                array_push($erro, $erros["Mensagem"]);
            }
            
        } else {
            array_push($erro, $content);
        }

        return new Result(Result::ERROR, NULL, $erro);
    }
    
    protected function get500() {
        return new Result(Result::REQUEST_FAIL, NULL, array("Falha na requisição!"), $this->getHttpObject()->getContent());
    }
}
