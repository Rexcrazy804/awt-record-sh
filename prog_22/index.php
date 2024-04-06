<html>

<head>
  <title>Cool</title>
</head>

<body>
    <h1 style="font-size: 5em; color: magenta;">
      Hello visitor
      <?php
      $filename = "visitors.txt";
      $data = 1;
      if (file_exists($filename)) {
        $file = fopen($filename, "r");
        $data = fread($file, filesize($filename));
        $data = (int)$data + 1;
      }
      $file = fopen($filename, "w");
      fwrite($file, $data);

      echo "$data";
      ?>
    </h1>
</body>

</html>
