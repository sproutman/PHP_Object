<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Human{
    public $name = null;
    public $gender = null;
    
    public function __construct($name,$gender) {
//        echo '__construct function run ';
        $this->name = $name;
        $this->gender = $gender;
    }


}

$a = new Human('LiSi','Male');
//$a = new Human();
echo $a->name;
echo $a->gender;






?>
