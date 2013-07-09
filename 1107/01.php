<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Human{
    private $money = 1000;
    public function showMoney(){
        echo $this->money;
    }
}

$LiSi = new Human();
echo $LiSi->showMoney();
    
?>
