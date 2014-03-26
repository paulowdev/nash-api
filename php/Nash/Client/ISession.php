<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author geanribeiro
 */
interface ISession {
    const AUTHENTICATION_SUCCESS = 1;
    const INVALID_CREDENTIAL = 2;
    const TIMEOUT = 3;
    const SERVICE_NOT_FOUND = 4;
    const NOT_AUTHENTICATED = 5;
    
    function getUsername();
    function isAuthenticated();
    function getResultCode();
    function getServiceUrl();
    function login(array $params);
    function logout();
    function get($servicePath, $params = array());
    function post($servicePath, $params = array());
    function put($servicePath, $params = array());
    function delete($servicePath, $params = array());
}
