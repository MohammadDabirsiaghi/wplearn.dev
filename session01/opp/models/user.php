<?php
//define('AAA',1);
//echo __DIR__;
require_once("../db.php");
class User extends Db 
{
   // public $table;
    
    //const AAA=1;
  public function  __constructor(){
        $this->table='users';
    }
}
$user=new User();
$user->find(1);
