<?php include "functions.php"; 
$background_color="#CCC"; 
if(isset($_POST['send'])){
    //var_dump($_POST);
    $background_color=select_bg($_POST['background']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:<?php echo $background_color ?>">

    <?php  
        $sample=12;
        $d=true;
       // echo $d+$sample;
        $users_id=array("score"=>15,"main"=>2,3,4,5,8,10);
        echo  $users_id[0]; 
    ?>
    <?php if(is_user_logged_in()): ?>
            <p>welcome</p>
        <?php else :?>
            <a href="#">login</a>
        <?php endif;?>

        <?php 
            $a=false;
            switch ($a) {
                case true:
                    echo 'TRUE';
                    break;
                    case false:
                        echo 'FALSE';
                        break;
                    
                default:
                echo 'default';
                    break;
            }
        ?>
        <form action="" method="post">
            <input type="radio" name="background" id="" value="blue">Blue
            <input type="radio" name="background" id="" value="green">Green
            <input type="radio" name="background" id="" value="red">Red
            <input type="submit" name="send" value="Send">
        </form>
</body>
</html>