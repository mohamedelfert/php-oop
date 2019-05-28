<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Elfert
 * Date: 4/10/2019
 * Time: 1:04 AM
 */

namespace applePhones;

class createphone{

    public $name;

    public function createName($n){

        $this->name = $n;

        echo 'Hello From Apple Phone Your Name is : ' . $n . '<br>';

    }

}