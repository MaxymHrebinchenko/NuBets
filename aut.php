<?php

    $tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'betting_system');
    $result = $mysql->query("SELECT * FROM `customers` WHERE `phone_number` = '$tel' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    $ac = $user['access'];
    if (mysqli_num_rows($result)==0){
        echo "Такой пользователь не найден!";
        exit;
    }
    setcookie('user', $user['phone_number'], time()+3600*24, "/");

    $mysql->close();
    if ($ac==0){
        header('Location: adminpage.php');
    }
    else{
    header('Location: index.php');}
?>