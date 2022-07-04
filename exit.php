<?php
    setcookie('user', $user['phone_number'], time()-3600*24, "/");
    header('Location: main.php');
?>