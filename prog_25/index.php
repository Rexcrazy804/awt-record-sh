<!DOCTYPE html>
<?php
  date_default_timezone_set("Asia/Kolkata");
  setcookie("visit", date("m.d.y"));
?>
<html lang="en">
  <head>
    <title>Cool</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center">
      <h1 class="text-5xl font-semibold text-rose-500">
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
