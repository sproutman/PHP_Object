<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Human{
    public $name = 'LiSi';
    public $gend = 'Men';
    
    private function __construct() {
        echo 'HI';
    }
}

$a = new Human();
$b = new Human();
$c = new Human();

echo $a->name;
echo "</br>";
echo $b->name;
echo "</br>";
echo $c->name;
echo "</br>";

echo $a->gend;
echo "</br>";
echo $b->gend;
echo "</br>";
echo $c->gend;
echo "</br>";

?>
