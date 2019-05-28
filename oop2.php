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

    // medthods => functions
    public function setSpac($na,$ra,$in,$co,$sp){
        $this->name  = $na;
        $this->ram   = $ra;
        $this->inch  = $in;
        $this->color = $co;
        $this->space = $sp;
    }

}

$HuaweiMate10Pro = new HuaweiDevice();
$HuaweiMate10Pro->name = 'Huawei Mate 10 Pro';
$HuaweiMate10Pro->ram = '6Gb';
$HuaweiMate10Pro->inch = '6 Inch';
$HuaweiMate10Pro->color = 'Blue';
$HuaweiMate10Pro->space = '128GB';

echo '<pre>';
var_dump($HuaweiMate10Pro);
echo '</pre>';

$HuaweiMate8 = new HuaweiDevice();
$HuaweiMate8->setSpac('Huawei Mate 8','3GB','5.5 Inch','Black','64GB');

echo '<pre>';
var_dump($HuaweiMate8);
echo '</pre>';