<?php
  date_default_timezone_set("Asia/Kolkata");
  setcookie("visit", date("m.d.y"));
?>
<html>
  <head>
    <title>Cool</title>
  </head>
  <body>
    <section>
      <h1 style="font-size: 6em; color: red;">
        <?php
          if ($cookie = $_COOKIE["visit"]) {
            echo "Your last visit was at $cookie";
          } else {
            echo "No Cookies!";
          }
        ?>
      </h1>
    </section>
  </body>
</html>
