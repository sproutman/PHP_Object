<?php
header('Content-Type:text/html; charset=utf-8');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Man {

    public $iq = 100;

    public function say() {
        $arr = array('早上好', '晚上好', '你妹呀');

        if ($this->iq >= 100) {
            echo $arr[0];
        } else {
            $i = rand(0, 2);
            echo $arr[$i];
        }
    }

}

class Car {

    public function hit($people) {
        $newiq = rand(50, 100);
        $people->iq = $newiq;
    }

}

$lisi = new Man();
$QQ = new Car();

$lisi->say();
echo '<br />';


$QQ->hit($lisi);

echo $lisi->iq;
echo  '<br />';
echo $lisi->say();

echo  '<br />';
echo $lisi->say();

echo  '<br />';
echo $lisi->say();

?>


