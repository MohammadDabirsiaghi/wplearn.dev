<?php

require_once("../db.php");
class Payment extends Db 
{

  public function  __constructor(){
        $this->table='payments1';
    }
}
