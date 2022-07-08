<!DOCTYPE html>
<html>
  <head>
    <title>Панель адміністратора</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/mybets/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/головна/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u0" class="ax_default box_3">
        <div id="u0_div" class=""></div>
        <div id="u0_text" class="text ">
          <p><span>B</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u1" class="ax_default box_1">
        <img id="u1_img" class="img " src="images/головна/u1.svg"/>
        <div id="u1_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      <?php
        error_reporting(0);
        if($_COOKIE['user'] == ''):
      ?>
      <!-- Unnamed (Rectangle) -->
      <div id="u2" class="ax_default label">
        <div id="u2_div" class=""></div>
        <div id="u2_text" class="text ">
          <p><a id="u3" class="link"><span style="text-decoration:underline ;">ВХІД</span></a><span>/</span><a id="u4" href="registration.html" class="link"><span style="text-decoration:underline ;">РЕЄСТРАЦІЯ</span></a></p>
        </div>
      </div>
      <?php
        else:
      ?>
      <div id="u2" class="ax_default label">
        <div id="u2_div" class=""></div>
        <div id="u2_text" class="text ">
          <p><a id="u4" href="exit.php" class="link"><span style="text-decoration:underline ;">ВИЙТИ</span></a></p>
        </div>
      </div>
      <?php
        endif;
      ?>
      
      

        <?php
            $tel = $_COOKIE['user'];
            $mysql = new mysqli('localhost', 'root', '', 'betting_system');
            $results = $mysql->query("SELECT * FROM `customers`");
            $j=0; 
            $i=0; 
            while ($user = mysqli_fetch_array($results)) {
                $j=$j+1;
            $UID = $user['UID'];
            $result = $mysql->query("SELECT * FROM `bids` WHERE `UID` = '$UID'");

        ?>













        <div class="bog">
            <?php
            while ($bids = mysqli_fetch_array($result)) {
                if (($bids['result'] != '1') && ($bids['result'] != '0')){
                $i=$i+1;
                $MID=$bids['matchID'];
                 $result1 = $mysql->query("SELECT * FROM `matches` WHERE `matchID` = '$MID'");
            $match = $result1->fetch_assoc();
            if ($bids['team']=="Перемога 1"){
                $total = $bids['amount']*$match['coefficient1'];
            }
            if ($bids['team']=="Перемога 2"){
                $total = $bids['amount']*$match['coefficient2'];
            }
            ?>
            <div class="allbets">
      <div class="box">
        <div>Турнір: <?php echo $match['matchname'] ?></div>
        <hr />
        <div>Команда 1: <?php echo $match['team1'] ?> </div>
        <hr />
        <div>Команда 2: <?php echo $match['team2'] ?> </div>
        <hr />
        <form method="post" action="moder.php">
        <?php echo "<button name='team1' value='".$MID."' style='width:447px; background-color: green; color:white; cursor:pointer;'>Команда 1</button>"?>
        <?php echo "<button name='team2' value='".$MID."' style='width:447px; background-color: red; color:white; cursor:pointer;'>Команда 2</button>"?>
        </form>
        
    </div></div>
    <?php
            }}}
            ?>
    </div>
      
      <!-- Unnamed (Dynamic Panel) -->
      <div id="u54" class="ax_default ax_default_hidden" style="display:none; visibility: hidden">
        <div id="u54_state0" class="panel_state" data-label="State 1" style="">
          <div id="u54_state0_content" class="panel_state_content">

            <!-- Unnamed (Dynamic Panel) -->
            <div id="u55" class="ax_default">
              <div id="u55_state0" class="panel_state" data-label="State 1" style="">
                <div id="u55_state0_content" class="panel_state_content">

                  <!-- Unnamed (Rectangle) -->
                  <div id="u56" class="ax_default box_1">
                    <div id="u56_div" class=""></div>
                    <div id="u56_text" class="text " style="display:none; visibility: hidden">
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <form id="aut" action="aut.php" method = "post" onsubmit="return check()" novalidate>
            <!-- Unnamed (Rectangle) -->
            <button id="u57" class="ax_default primary_button">
              <div id="u57_div" class=""></div>
              <div id="u57_text" class="text ">
                <p><span>ЛОГІН</span></p>
              </div>
            </button>

            <!-- Unnamed (Text Field) -->
            <div id="u58" class="ax_default text_field">
              <div id="u58_div" class=""></div>
              <input id="u58_input" type="text" value="" class="u58_input" name="tel"/>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u59" class="ax_default heading_3">
              <div id="u59_div" class=""></div>
              <div id="u59_text" class="text ">
                <p><span>Ваш телефон:</span></p>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u60" class="ax_default heading_3">
              <div id="u60_div" class=""></div>
              <div id="u60_text" class="text ">
                <p><span>Ваш пароль:</span></p>
              </div>
            </div>

            <!-- Unnamed (Text Field) -->
            <div id="u61" class="ax_default text_field">
              <div id="u61_div" class=""></div>
              <input id="u61_input" type="text" value="" class="u61_input" name="password"/>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u62" class="ax_default label">
              <div id="u62_div" class=""></div>
              <div id="u62_text" class="text ">
                <p><a id="u63" href="registration.html" class="link"><span style="text-decoration:underline ;">Нема аккаунту?</span></a></p>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></>
  </body>
</html>
