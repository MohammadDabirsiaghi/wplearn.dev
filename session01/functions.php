<?php
function sum ($a,$b){
    return $a+$b;
 
}
// $result=sum(10,20);
// echo $result;

function is_user_logged_in(){
    return false;
}
function select_bg($color_name){
    $result="";
    switch ($color_name) {
        case 'blue':
           $result='#00c';
            break;
            case 'red':
                $result='#c00';
                 break;
                 case 'green':
                    $result='#0c0';
                     break;
        default:
            # code...
            break;
    }
    return $result;
}

function get_users(){
    //return null;
    return array(
        array('id'=>1,'name'=>'ali1','email'=>'1a@b.com'),
        array('id'=>2,'name'=>'ali2','email'=>'2a@b.com'),
        array('id'=>3,'name'=>'ali3','email'=>'3a@b.com'),

    );
}
?>