<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Human{
    public $name = null;
    public $gender = null;
    
    public function __construct() {
        echo '__construct function run ';

    }
    
    public function __destruct() {
        echo 'destruct__AWE';
    }
}


$a = new Human();
unset($a);

        
    
?>
