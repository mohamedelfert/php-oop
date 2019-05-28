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
    public $ownerName;

    // constant
    const OwnerName = 5;

    // medthods => functions
    public function getInformation(){
        echo 'This Phone Name Is : ' . $this->name . ' And Ram Is : ' . $this->ram ;
    }

    public function setOwnerName(){
        if (strlen($this->ownerName) < self::OwnerName){
            echo 'Cant Be Continued Owner Name Less Than ' .self::OwnerName. ' chrs';
        }else{
            echo 'Ok Owner Name Set';
        }
    }
    
}

$HuaweiMate10Pro = new HuaweiDevice();
$HuaweiMate10Pro->name = 'Huawei Mate 10 Pro';
$HuaweiMate10Pro->ram = '6Gb';
$HuaweiMate10Pro->inch = '6Inch';
$HuaweiMate10Pro->color = 'Blue';
$HuaweiMate10Pro->space = '128GB';
$HuaweiMate10Pro->getInformation();

echo '<pre>';
var_dump($HuaweiMate10Pro);
echo '</pre>';

$HuaweiMate8 = new HuaweiDevice();
$HuaweiMate8->ownerName = 'Huawei';
$HuaweiMate8->setOwnerName();

echo '<pre>';
var_dump($HuaweiMate8);
echo '</pre>';