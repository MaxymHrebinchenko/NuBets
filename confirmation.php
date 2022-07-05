<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Підтвердження</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files\confirmation\styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/confirmation/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <script>
  function check () {
    var error = "", field = "", field2 = "", errr = '', errr2='', errr3 ='';
   
    field = document.getElementById("u85_input");
    if (!field.checkValidity()) {
      error += "Ваша сума повинна бути не менше 2 та не більше 5000$!\r\n";
    }
  
    if (error=="") { return true; }
    else {
      alert(error);
      return false;
    }
  }
  </script>
  <body>
    <form id="base" action="pay.php" method = "post" onsubmit="return check()" novalidate>
      <!-- money (Text Field) -->
      <div id="u85" class="ax_default text_field" data-label="money">
        <div id="u85_div" class=""></div>
        <input id="u85_input" type="number" value="" class="u85_input" min="2" max="2000" name="sum"/>
      </div>

      <!-- choice (Droplist) -->
      <div id="u86" class="ax_default droplist" data-label="choice">
        <div id="u86_div" class=""></div>
        <select id="u86_input" class="u86_input" name="winner">
          <option class="u86_input_option" value="Перемога 1">Перемога 1</option>
          <option class="u86_input_option" value="Перемога 2">Перемога 2</option>
        </select>
      </div>

      <!-- Unnamed (Rectangle) -->
      <button id="u87" type="submit" class="ax_default primary_button">
        <div id="u87_div" class=""></div>
        <div id="u87_text" class="text ">
          <p><span>ЗРОБИТИ СТАВКУ</span></p>
        </div>
      </button>


      <!-- Unnamed (Rectangle) -->
      <div id="u88" class="ax_default heading_2">
        <div id="u88_div" class=""></div>
        <div id="u88_text" class="text ">
          <p><span>Введіть суму ($):</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u89" class="ax_default heading_2">
        <div id="u89_div" class=""></div>
        <div id="u89_text" class="text ">
          <p><span>Виберіть результат:</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u90" class="ax_default heading_1">
        <div id="u90_div" class=""></div>
        <div id="u90_text" class="text ">
          <p><span>Підтвердження ставки</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u91" class="ax_default heading_1">
        <div id="u91_div" class=""></div>
        <div id="u91_text" class="text ">
          <p><span>CS:GO</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u92" class="ax_default primary_button">
        <div id="u92_div" class=""></div>
        <div id="u92_text" class="text ">
          <p><span>НАЗАД</span></p>
        </div>
      </div>
      <!-- card (Text Field) -->
      <div id="u93" class="ax_default text_field" data-label="card">
        <div id="u93_div" class=""></div>
        <input id="u93_input" name="team1" type="text" value="<?php echo $_SESSION['team1'];?>" class="u93_input" readonly/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u94" class="ax_default heading_2">
        <div id="u94_div" class=""></div>
        <div id="u94_text" class="text ">
          <p><span>Команда 1:</span></p>
        </div>
      </div>

      <!-- date (Text Field) -->
      <div id="u95" class="ax_default text_field" data-label="date">
        <div id="u95_div" class=""></div>
        <input id="u95_input" name="team2" type="text" value="<?php echo $_SESSION['team2'];?>" class="u95_input" readonly/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u96" class="ax_default heading_2">
        <div id="u96_div" class=""></div>
        <div id="u96_text" class="text ">
          <p><span>Команда 2:</span></p>
        </div>
      </div>
</form>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
