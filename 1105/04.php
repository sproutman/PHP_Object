<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Human{
    public $age = 0;
}

$a = new Human();
echo $a->age,'<br />';

class People{
    public $age;
}
$b = new Human();
var_dump($b->age);
echo $b->age;

?>
