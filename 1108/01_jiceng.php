<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Hman{
    private $height = 160;
    
    public function cry() {
        echo '555...<br />';
    }
}

class Stu extends Hman{
//    private $height = 170;
    
    public function showAge(){
        echo $this->height;
    }
    

}


$s = new Stu();
echo $s->cry();
echo $s->showAge();
?>
