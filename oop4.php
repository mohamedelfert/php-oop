<?php

class phone {

    public $name;
    public function __construct($n){
        $this->name = $n;
        echo 'welcome ' .$n. ' ok' ;
    }

    public function __call($method,$prams){
        echo 'the method [ ' .$method. ' ] no ' ;
    }

    public function __set($prop,$val){
        echo 'the proparity [ ' .$prop. ' ] no ' ;
    }
}

$row = new phone('medo');
$row ->sayhello();
$row ->color = 'dsadas';