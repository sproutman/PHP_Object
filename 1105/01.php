<?php

header('Content-Type:text/html; charset=utf-8');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$g = $_GET['gender'];

if( $g == '男' ){
    echo '先生好';
}
elseif ( $g == '女' ) {
    echo '小姐好';
}
else
{
    echo '妖猴';
}

?>
