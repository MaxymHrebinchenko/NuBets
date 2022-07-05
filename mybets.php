<!DOCTYPE html>
<html>
  <head>
    <title>Головна</title>
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
          <p><a id="u4" href="account.php" class="link"><span style="text-decoration:underline ;">ПРОФІЛЬ</span></a><span>/</span><a id="u4" href="exit.php" class="link"><span style="text-decoration:underline ;">ВИЙТИ</span></a></p>
        </div>
      </div>
      <?php
        endif;
      ?>
      

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u187" class="ax_default">
        <div id="u187_state0" class="panel_state" data-label="State 1" style="">
          <div id="u187_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u188" class="ax_default primary_button">
              <div id="u188_div" class=""></div>
              <div id="u188_text" class="text ">
                <p><a href="main.php" style="text-decoration:none ;">Головна</a></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u187_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u187_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u189" class="ax_default primary_button">
              <div id="u189_div" class=""></div>
              <div id="u189_text" class="text ">
                <p><a href="main.php" style="text-decoration:none ;">Головна</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u18" class="ax_default primary_button">
        <div id="u18_div" class=""></div>
        <div id="u18_text" class="text ">
          <p><span>Мої ставки</span></p>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u19" class="ax_default">
        <div id="u19_state0" class="panel_state" data-label="State 1" style="">
          <div id="u19_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u20" class="ax_default primary_button">
              <div id="u20_div" class=""></div>
              <div id="u20_text" class="text ">
                <p><span>Ігри</span></p>
              </div>
            </div>

            <!-- Unnamed (Line) -->
            <div id="u21" class="ax_default line">
              <img id="u21_img" class="img " src="images/головна/u21.svg"/>
              <div id="u21_text" class="text " style="display:none; visibility: hidden">
                <p></p>
              </div>
            </div>

            <!-- Unnamed (Vertical Line) -->
            <div id="u22" class="ax_default line">
              <img id="u22_img" class="img " src="images/головна/u22.svg"/>
              <div id="u22_text" class="text " style="display:none; visibility: hidden">
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u19_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u19_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u23" class="ax_default primary_button">
              <div id="u23_div" class=""></div>
              <div id="u23_text" class="text ">
                <p><span>Ігри</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u24" class="ax_default">
        <div id="u24_state0" class="panel_state" data-label="State 1" style="">
          <div id="u24_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u25" class="ax_default primary_button">
              <div id="u25_div" class=""></div>
              <div id="u25_text" class="text ">
                <p><span>Dota 2</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u24_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u24_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u26" class="ax_default primary_button">
              <div id="u26_div" class=""></div>
              <div id="u26_text" class="text ">
                <p><span>Dota 2</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u27" class="ax_default">
        <div id="u27_state0" class="panel_state" data-label="State 1" style="">
          <div id="u27_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u28" class="ax_default primary_button">
              <div id="u28_div" class=""></div>
              <div id="u28_text" class="text ">
                <p><span>FIFA</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u27_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u27_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u29" class="ax_default primary_button">
              <div id="u29_div" class=""></div>
              <div id="u29_text" class="text ">
                <p><span>FIFA</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u30" class="ax_default">
        <div id="u30_state0" class="panel_state" data-label="State 1" style="">
          <div id="u30_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u31" class="ax_default primary_button">
              <div id="u31_div" class=""></div>
              <div id="u31_text" class="text ">
                <p><span>Clash Royale</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u30_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u30_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u32" class="ax_default primary_button">
              <div id="u32_div" class=""></div>
              <div id="u32_text" class="text ">
                <p><span>Clash Royale</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u33" class="ax_default">
        <div id="u33_state0" class="panel_state" data-label="State 1" style="">
          <div id="u33_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u34" class="ax_default primary_button">
              <div id="u34_div" class=""></div>
              <div id="u34_text" class="text ">
                <p><span>Overwatch</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u33_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u33_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u35" class="ax_default primary_button">
              <div id="u35_div" class=""></div>
              <div id="u35_text" class="text ">
                <p><span>Overwatch</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Dynamic Panel) -->
      <div id="u36" class="ax_default">
        <div id="u36_state0" class="panel_state" data-label="State 1" style="">
          <div id="u36_state0_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u37" class="ax_default primary_button">
              <div id="u37_div" class=""></div>
              <div id="u37_text" class="text ">
                <p><span>CS:GO</span></p>
              </div>
            </div>
          </div>
        </div>
        <div id="u36_state1" class="panel_state" data-label="State 2" style="visibility: hidden;">
          <div id="u36_state1_content" class="panel_state_content">

            <!-- Unnamed (Rectangle) -->
            <div id="u38" class="ax_default primary_button">
              <div id="u38_div" class=""></div>
              <div id="u38_text" class="text ">
                <p><span>CS:GO</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>


        <?php
            $tel = $_COOKIE['user'];
            $mysql = new mysqli('localhost', 'root', '', 'betting_system');
            $result = $mysql->query("SELECT * FROM `customers` WHERE `phone_number` = '$tel'");
            $user = $result->fetch_assoc();
            $UID = $user['UID'];
            $result = $mysql->query("SELECT * FROM `bids` WHERE `UID` = '$UID'");

        ?>













        <div class="bog">
            <?php
            while ($bids = mysqli_fetch_array($result)) {
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
        <div>Матч: <?php echo $match['team1'] ?> vs. <?php echo $match['team2'] ?></div>
        <hr />
        <div>Турнір: <?php echo $match['matchname'] ?></div>
        <hr />
        <div>Ставка: <?php echo $bids['team'] ?></div>
        <hr />
        <div>Сума ставки: <?php echo $bids['amount'] ?></div>
        <hr />
        <div>Можливий виграш: <?php echo $total ?></div>
    </div></div>
    <?php
            }
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
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
