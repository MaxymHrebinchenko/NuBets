<!--
Interface coded by Wanderson Jackson, UX Designer and UI Developer
https://www.uplabs.com/jackson
------------------------------------------------------------------
UI Concept by Viyaj Verna, Product designer
https://www.uplabs.com/posts/profile-card-ddd03647-6e7e-4bda-8571-0d1f4eb52f21
twitter.com/realvjy
-->
<link href="files\account\style.css" type="text/css" rel="stylesheet"/>

<div class="container">
  <div class="grid-7 element-animation">
    <!--card-1-->
    <div class="card color-card">
      <ul>
        <li><a href="index.php"><i class="fas fa-arrow-left i-l w"></i></a></li>
      </ul>
      <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="profile-pic" class="profile">
      <h1 class="title"><?php $tel=$_COOKIE['user']; echo $tel; ?></h1>
      <div class="desc top" style="color:white">
        <p>Поповнити баланс</p>
      </div>
      <script src="app.js"></script>
        <div id="container"></div>
        <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
        <div class="withdraw" style="background-color: rgb(0, 227, 0); width:240px; margin-top:20px; margin-left:68px; height: 35px; font-family: Helvetica, sans-serif; border-radius: 5px;"><p style="padding: 8px 0; font-weight:500;">Виведення грошей</p></div>

      <hr>
      <div class="container">
        <div class="content">
          <div class="grid-2">
            <?php
                $mysql = new mysqli('localhost', 'root', '', 'betting_system');
                $result = $mysql->query("SELECT * FROM `customers` WHERE `phone_number` = '$tel'");
                $user = $result->fetch_assoc();
                $UID = $user['UID'];
                $result = $mysql->query("SELECT * FROM `bids` WHERE `UID` = '$UID'");
            ?>
            <button class="color-b circule"> <i class="fas fa-dollar-sign fa-2x"></i></button>
            <h2 class="title"><?php echo $user['wallet']; ?></h2>
            <p class="followers">Ballance</p>
          </div>
          <div class="grid-2">
            <button class="color-c circule"><i class="fab fa-dribbble fa-2x"></i></button>
            <h2 class="title"><?php echo mysqli_num_rows ( $result );?></h2>
            <p class="followers">Bets Made</p>
          </div>
          <div class="grid-2">
            <button class="color-d circule"><i class="fas fa-gift fa-2x"></i></button>
            <h2 class="title">0</h2>
            <p class="followers">Donates</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">