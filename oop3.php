<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Elfert
 * Date: 4/7/2019
 * Time: 1:21 PM
 */

class HuaweiDevice{

    // properties  => variables
    public $name = 'HUAWEI';
    public $ram = '2GB';
    public $inch = '5.5Inch';
    public $color = 'Black';
    public $space = '16GB';
    private $lock;

    // medthods => functions
    final public function setLock($lo){
        $this->lock = sha1($lo);
    }

}

class sonyDevice extends HuaweiDevice{
    public $camera = '15 MB';
}


$HuaweiMate8 = new HuaweiDevice();
$HuaweiMate8->setLock('medo@123');
echo '<pre>';
var_dump($HuaweiMate8);
echo '</pre>';

$sony = new sonyDevice();
echo '<pre>';
var_dump($sony);
echo '</pre>';