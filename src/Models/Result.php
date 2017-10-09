<?php

 namespace Nash\Models;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Result
 *
 * @author geanribeiro
 */
class Result {
    const SUCCESS = 1;
    const REQUEST_FAIL = 2;
    const ERROR = 3;

    private $status;
    private $erros = array();
    private $model = NULL;
    private $detail = NULL;

    public function __construct($status, $model, $erros = array(), $detail = null) {
        $this->status = $status;
        $this->erros = $erros;
        $this->model = $model;
        $this->detail = $detail;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getErros() {
        return $this->erros;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setErros(array $erros) {
        $this->erros = $erros;
        return $this;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    public function getDetail() {
        return $this->detail;
    }

    public function setDetail($detail) {
        $this->detail = $detail;
        return $this;
    }
}
