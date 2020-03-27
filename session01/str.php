<?php
include 'functions.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $users=get_users();
   
        ?>
        <?php foreach ($users as  $user) : $template=" Hellow #name#.{email}"; ?>
            
            <!-- <?php $template =str_replace('#name#',$user['name'],$template); ?> -->
            <?php $template =str_replace(array('#name#','{email}'),array( $user['name'],$user['email']),$template); ?>
            <P><?php echo $template  ?></p>
        <?php endforeach; ?>
</body>
</html>