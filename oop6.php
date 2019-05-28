<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Elfert
 * Date: 4/10/2019
 * Time: 1:03 AM
 */

require 'apple.php';
require 'sony.php';
require 'lg.php';

$apple = new applePhones\createphone();
$apple->createName('medo');

$sony = new lgPhones\createphone();
$sony->createName('medo');

$lg = new sonyPhones\createphone();
$lg->createName('medo');