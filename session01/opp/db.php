<?php
class Db 
{
    public $table;
    public function all(){

        return "SELECT * FROM {$this->table}";
    }
    public function find($id,$columns=null){

        
        $columns=!is_null($columns)? implode(',',$columns):'*';

        return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }
    public function delete($id){

        return "DELETE FROM {$this->table} WHERE id={$id}";
    }
    private function  sort(){

    }
    public static function export(){

    }
}
 $connection=new Db();
 $connection->table="users";
 $connection->find(56,array('id','name'));
 Db::export();