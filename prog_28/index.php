<?php
  session_start();
?>
<html>
  <head>
    <title>Session</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-5">
      <h1 class="text-3xl font-semibold text-emerald-400"> Sessions </h1>
      <div class='flex gap-4 flex-col justify-center items-center'>
        <form 
          action="create.php" method="post"
          class="flex p-8 gap-8 bg-white drop-shadow-md rounded-md"
        >
          <input
            type="text" name="color" 
            placeholder="Favourite Color" required
            class="bg-transparent focus:outline-none border-b-2 border-emerald-300 p-2 text-center"
          />
          <input 
          type="submit" value="<?php if (isset($_SESSION['color'])) { echo 'Update'; } else { echo 'Create'; } ?>"
            class="bg-emerald-400 hover:bg-emerald-500 p-4 text-white font-semibold w-fit self-center rounded-md cursor-pointer"
          />
        </form>
        <?php
          if (isset($_SESSION['color'])) {
            $style = "<a class='text-xl font-bold text-slate-400 px-2'>";
            echo "<p class='text-lg'>your favourite color is ". $style . $_SESSION['color'] . "</a></p>";
            echo"
              <a 
                href='destroy.php' 
                class='text-lg text-red-400 font-semibold hover:font-bold active:text-red-500'
              >
                Destroy Session
              </a>
            ";
          }
        ?>
      </div>
    </section>
  </body>
</html>
