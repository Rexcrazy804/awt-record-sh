<html>
  <head>
    <title>Received Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-3 text-lg">
      <h1 class="text-4xl font-semibold text-emerald-400 drop-shadow-xl">Customer Information</h1>
      <div class="flex flex-col justify-center items-center shadow-md overflow-hidden rounded-md">
        <?php
          function data($heading, $value) {
            echo "
              <div class='flex flex-col *:p-4 *:px-5 items-center text-center g-1'>
                <h1 class='bg-emerald-400 text-white w-full font-semibold'>$heading</h1>
                <a class='bg-zinc-50 w-full'>
                  $value
                </a>
              </div>
            ";
          }

          // Tables using Flexboxes, you can just use <tr> <th> <td> instead if your prefer it
          echo "<div class='flex flex-row'>";

          echo data("Customer No.", $_POST['cno']);
          echo data("Name", $_POST['name']);
          echo data("Place", $_POST['place']);
          echo data("Email", $_POST['email'].trim());
          echo data("Phone No.", $_POST['phono']);
          
          echo "</div>";
        ?>
      </div>
    </section>
    <script>
    </script>
  </body>
</html>
