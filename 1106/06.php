<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HunMan {
    public $name = 'LiSi';
    public function who() {
        echo $this->name;
    }
}

$a = new HunMan();

//echo $a->name;

echo $a->who();
?>
