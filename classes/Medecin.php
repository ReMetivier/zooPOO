<?php

class Medecin extends Employe
{
    function __construct(){
        parent::__construct();
        $this->pay = 1700;
    }

    function verifyHealth($param){
        $param->sick = false;
        return $param->sick;
    }
}