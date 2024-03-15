<html>
  <head>
    <title>Delete </title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <?php
        function display($msg, $color = "bg-red-500") {
          echo "<a class='text-4xl $color text-white font-semibold p-3 rounded-md'>$msg</a>";
        }

        if ($_POST['pass'].trim() != "root") {
          display("WRONG PASSWORD");
          return;
        }
        
        $dbase = new mysqli("localhost", "root", "root", "record");
        if ($dbase->connect_error) {
          display("Failed to connect to database");
        }

        $regno = $_POST['regno'];
        $query = "DELETE FROM register WHERE id=$regno";
        $dbase->query($query);
        
        if ($dbase->affected_rows > 0) {
          display("Succesfully Deleted Register Entry", "bg-emerald-400");
        } else {
          display("Failed to Delete Entry");
        }
      ?>
    </section>
  </body>
</html>
