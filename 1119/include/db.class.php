<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 数据库类  abstract
 */

abstract class db{
    //connect db server
    public abstract function connect( $h, $u, $p );
    
    //
    public abstract function query( $sql );
    
    //
    public abstract function getRow( $sql );
    public abstract function getOne( $sql );
    public abstract function getAll( $sql );
    
    //run insert/update sql 
    public abstract function autoExecute($table, $data,$act = 'insert',$where = '' );
    
}
?>
