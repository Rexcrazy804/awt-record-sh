<?php
  session_start();
?>
<html>
  <head>
    <title>Create</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <div class="flex flex-col p-5 gap-5 justify-center items-center">
        <?php session_destroy();?>
        <h1 class='text-6xl text-emerald-400 font-semibold'>
          Session Destroyed Succesfully
        </h1>
        <a 
          href="index.php"
          class="bg-emerald-400 hover:bg-emerald-500 p-3 rounded-md drop-shadow-md text-white font-semibold text-xl"
        >return</a>
      </div>
    </section>
  </body>
</html>
