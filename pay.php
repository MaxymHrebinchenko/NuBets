<?php
    $winner = filter_var(trim($_POST['winner']), FILTER_SANITIZE_STRING);
    $sum = filter_var(trim($_POST['sum']), FILTER_SANITIZE_STRING);
    $team1 = filter_var(trim($_POST['team1']), FILTER_SANITIZE_STRING);
    $team2 = filter_var(trim($_POST['team2']), FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost', 'root', '', 'betting_system');
    $result = $mysql->query("SELECT * FROM `matches` WHERE `team1` = '$team1' AND `team2` = '$team2'");
    $user = $result->fetch_assoc();

    $matchID = $user['matchID'];

    $tel = $_COOKIE['user'];
    $result = $mysql->query("SELECT * FROM `customers` WHERE `phone_number` = '$tel'");
    $user = $result->fetch_assoc();

    $UID = $user['UID'];
    $wallet = $user['wallet'];
    if ($wallet >= $sum){
        $wallet=$wallet-$sum;
        $mysql->query("UPDATE `customers` SET `wallet`='$wallet' WHERE `UID` = '$UID'");
    $mysql->query("INSERT INTO `bids` (`UID`, `matchID`, `team`, `amount`) VALUES ('$UID', '$matchID', '$winner', '$sum')");
    $mysql->close();
    header('Location: confirmation.php');
    }
    else{
        echo "На вашому балланcі недостатня сума!";
    }   
?>