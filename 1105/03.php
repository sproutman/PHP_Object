<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *  Class
 */
class People{
    public $name = 'nobody';
    
    
    public function cry() {
        echo 'Gua Gua';
    }
}

//print_r(new People());
$a = new People();

print_r($a->name);
print_r($a->cry())


?>
