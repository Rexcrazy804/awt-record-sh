<html>
  <head>
    <title>Cool</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <h1 class="text-9xl font-semibold text-purple-400">
        Hello visiter
        <?php
          $filename= "visitors.txt";
          $data = 1;
          if (!file_exists($filename)) {
            $file = fopen($filename, "w");
            fwrite($file, 1);
          } else {
            $file = fopen($filename, "r");
            $data = fread($file, filesize($filename));
            $data = (int)$data + 1;

            $file = fopen($filename, "w");
            fwrite($file, $data);
          }
          
          echo "$data";
        ?>
      </h1>
    </section>
  </body>
</html>
