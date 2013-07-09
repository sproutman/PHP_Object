<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



class mysql {

    private $host;
    private $user;
    private $pwd;
    private $dbName;
    private $charset;
    
    private $conn = null;

    public function __construct() {
        // read config file
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pwd = 'admin5';
        $this->dbName = 'stu1';
        
        // connect
        $this->connect( $this->host,  $this->user,  $this->pwd );
        
        $this->switch_Db($this->dbName);
        
        $this->setChar($this->charset);
    }

    private function connect($h,$u,$p) {
        $conn = mysql_connect($h,$u,$p);
        $this->conn = $conn;
//        return $conn;
    }

    public function switch_Db($db) {
        $sql = 'use'.$db;
//        mysql_query($sql);
        $this->query($sql);
    }
    
    public function setChar($db){
        $sql = 'set names'. $char;
        $this->query($sql);
    }

    public function query($sql) {
        return mysql_query($sql,  $this->conn);
    }

    public function getAll($sql) {
        $list = array();
        
        $rs = $this->query($sql);
        if(!$rs){
            return false;
        }
        
        while($row = mysql_fetch_assoc($rs)){
            $list[] = $row;
        }
        
        return $list;
    }
    
    
    //
    public function getRow($sql) {
        $rs = $this->query($sql);
        
        if(!$rs){
            return false;
        }
        return mysql_fetch_assoc($rs);
    }
    
    //
    public function getOne($sql) {
         $rs = $this->query($sql);
        
        if(!$rs){
            return false;
        }
        $row =  mysql_fetch_row ($rs);
        return $row[0];
    }

}


//Main FUN

$mysql = new mysql();

print_r($mysql);

?>
