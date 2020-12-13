<?php

class Ocelot extends Animal{

    function __construct(){
        parent::__construct();
        $this->food = false;
        $this->sick = true;
        $this->revelry = 5;
    }

}