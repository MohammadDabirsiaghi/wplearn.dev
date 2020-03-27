<?php
// $users=["a"=>"b","c"=>"d"];
// foreach ($users as  $name=>$user) {
//     echo  $name.' '.$user. ' ';
// }

$products=[
    [
        "id"=>"Dkp1",
        "price"=>124543,
        "name"=>"گوشی"
    ],
    [
        "id"=>"Dkp2",
        "price"=>789,
        "name"=>"موبایل"
    ]
    ];
foreach ($products as $value) {
    echo  $value["name"].$value["id"].$value["price"].'<br/>';
}