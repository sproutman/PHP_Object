<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Hunman2{
    private $height = 160;
    
    public function cry(){
        echo '5555</br>';
    }
}


class Stu  {
    private $height = 170;
    private $snum = '00134';
    
    public function cry(){
        echo '59..59</br>';
    }
    
    public function study(){
        echo 'Good Good study .Day Day UP</br>';
    }
    
}

class lawer{
    private $height = '100';
    
    public $area = '经济案件';
    
    public function cry(){
        echo '5555 <br />';
    }
    
    public function bianhu() {
        echo 'no guilt <br />';
    }
}

//

$zhoukou = new Hunman2();
$zhoukou->cry();

$xiaoming = new Stu();
$xiaoming->cry();
$xiaoming->study();

$lizhuang = new lawer();
$lizhuang->cry();
$lizhuang->bianhu();
?>
