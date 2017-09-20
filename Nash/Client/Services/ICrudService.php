<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(realpath(__FILE__)). '/../ISession.php';
require_once dirname(realpath(__FILE__)). '/../Models/Entidade.php';

/**
 *
 * @author geanribeiro
 */
interface ICrudService {
    function __construct(ISession $session);
    
    function create(Entidade $entity);
    function read($id);
    function update(Entidade $entity);
    function delete($id);
    function retrieve($take, $skip, $query = "");
}
