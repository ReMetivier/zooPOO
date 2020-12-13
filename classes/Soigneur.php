<?php

class Soigneur extends Employe{

    function __construct()
    {
        parent::__construct();
        $this->pay = 1200;
    }

    function setFood($param){

        $param->food = true;
        return $param->food;
    }
}