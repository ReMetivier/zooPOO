<?php

abstract class Zoo{

    function __construct(){

    }
    static function random(){
        $state = rand(0,1);
        return $state;
    }

    static function nbCustomers($param){
        $randCustomers = rand(0,100);
        $randCustomers * $param;
        return $randCustomers;

    }

    static function money($param){
        $result = $param * 30;
        return $result;
    }

}