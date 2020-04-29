<?php
    if( (!empty($_POST['name']) && (!empty($_POST['surname'])  && (!empty($_POST['date'])
      && (!empty($_POST['cityid']) ){
        echo "ok";
        require_once './connect.php';
        $sql = "INSERT FROM `user` WHERE `user`.`id` = '$id'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }else{

    }

    header('location: ../1_shop.php');
?>