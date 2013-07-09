<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function t(){
    echo 'external t';
}

class clock{
    public function time(){
        echo 'TIme Now is aaa';
    }
    
    public function time2(){
        echo $this->t();
    }
    public function t(){
        echo 'Internal T';
}
}


$c = new clock();
echo $c->time();
echo '<br />';
$c->time2();
?>
