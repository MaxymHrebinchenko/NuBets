<?php 
    $mysql = new mysqli('localhost', 'root', '', 'betting_system');
   if (isset($_POST['team1']))
   {
    $MID=$_POST['team1'];
        $ress = $mysql->query("SELECT * FROM `matches` WHERE `matchID` = '$MID'");
        $m = $ress->fetch_assoc();
        $coef1 = $m['coefficient1'];
        $coef2 = $m['coefficient2'];
        echo $coef1;
        $rr = $mysql->query("SELECT * FROM `bids` WHERE `matchID` = '$MID'");
        while ($bb = mysqli_fetch_array($rr)) {
        $UID = $bb['UID'];
        $b_id = $bb['BID'];
        $amount = $bb['amount'];
        $choice = $bb['team'];
        if ($choice == "Перемога 1"){
            $ress = $mysql->query("SELECT * FROM `customers` WHERE `UID` = '$UID'");
            $s = $ress->fetch_assoc();
            $sum=$amount*$coef1+$s['wallet'];
            $res = $mysql->query("UPDATE `bids` SET `result` = '1' WHERE `UID` = '$UID'");
            $re = $mysql->query("UPDATE `customers` SET `wallet` = '$sum' WHERE `UID` = '$UID'");}
            else{
                $res = $mysql->query("UPDATE `bids` SET `result` = '0' WHERE `UID` = '$UID'");
            }
        }
   }
   if (isset($_POST['team2']))
   {
    $MID=$_POST['team2'];
    $ress = $mysql->query("SELECT * FROM `matches` WHERE `matchID` = '$MID'");
        $m = $ress->fetch_assoc();
        $coef1 = $m['coefficient1'];
        $coef2 = $m['coefficient2'];
        $rr = $mysql->query("SELECT * FROM `bids` WHERE `matchID` = '$MID'");
        while ($bb = mysqli_fetch_array($rr)) {
        $UID = $bb['UID'];
        $b_id = $bb['BID'];
        $amount = $bb['amount'];
        $choice = $bb['team'];
        echo $UID;
        echo $choice;
        echo "     ";
        if ($choice == "Перемога 2"){
            $ress = $mysql->query("SELECT * FROM `customers` WHERE `UID` = '$UID'");
            $s = $ress->fetch_assoc();
            $sum=$amount*$coef2+$s['wallet'];
            $res = $mysql->query("UPDATE `bids` SET `result` = '1' WHERE `UID` = '$UID'");
            $re = $mysql->query("UPDATE `customers` SET `wallet` = '$sum' WHERE `UID` = '$UID'");}
            else{
                $res = $mysql->query("UPDATE `bids` SET `result` = '0' WHERE `UID` = '$UID'");
            }
        }
   }
   $mysql->close();
  header('Location: adminpage.php');
?>