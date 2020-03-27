<?php

require_once("../db.php");
class Post extends Db 
{

  public function  __constructor(){
        $this->table='posts';
    }
}
