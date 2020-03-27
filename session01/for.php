<?php
include 'functions.php';

$users=get_users();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for ($i=0; $i <10 ; $i++): ?>
      <!-- <p><?php echo $i; ?></p>   -->
    <?php endfor;  ?>


    <?php for ($i=0; $i <count($users)-1 ; $i++): $user=$users[$i] ?>
       <p><?php echo $user['id']; ?></p>   
    <?php endfor;  ?>


    <table>
    <tr>
                <th>id1</th>
                <th>name</th>
                <th>email</th>
                <th>actions</th>
            </tr>
            <?php if($users && is_array($users) && count($users)>0):  ?>
    <?php foreach ($users as $key => $user) :?>
       
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
       
    <?php endforeach; ?>
    <?php else: ?>
    <td colspan="4">اطلاعاتی یافت نشد</td>
    <?php endif; ?>

    </table>


    <table>
        <?php for ($i=0; $i <10 ; $i++):?>
            <tr>
                <?php for ($j=0; $j <5 ; $j++):?>
                <?php
                    $red=mt_rand(0,255);
                    $green=mt_rand(0,255);
                    $blue=mt_rand(0,255);
                    $bg_color= $red.','.$green.','.$blue ;
                ?>
                    <td style="background:rgb(<?php echo $bg_color  ?>)"><?php echo $bg_color  ?></td>       
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>
    </table>

</body>
</html>