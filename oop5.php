<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Elfert
 * Date: 4/10/2019
 * Time: 12:47 AM
 */

/*
require 'class/test1.php';
require 'class/test2.php';
require 'class/test3.php';
*/


spl_autoload_register(function ($class){
    require 'classes/' . $class . '.php';
});

$row1 = new test1();
echo '<pre>'; print_r($row1); echo '</pre>';

$row2 = new test2();
echo '<pre>'; print_r($row2); echo '</pre>';

$row3 = new test3();
echo '<pre>'; print_r($row3); echo '</pre>';