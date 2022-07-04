<?php
    $age = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
    $firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $secondname = filter_var(trim($_POST['secondname']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $reppassword = filter_var(trim($_POST['reppassword']), FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost', 'root', '', 'betting_system');
    $mysql->query("INSERT INTO `customers` (`phone_number`, `wallet`, `age`, `password`, `access`) VALUES ('$tel', 0, '$age', '$password', 1)");
    $mysql->close();
    header('Location: main.php');
?>