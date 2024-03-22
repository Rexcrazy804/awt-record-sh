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

        function show_entry($dbase) {
          $query = "SELECT * FROM register";
          $result = $dbase->query($query);
          if ($result->num_rows < 1) { return; }

          echo "
          <table class='drop-shadow-md rounded-md overflow-hidden w-[400px]'>
            <tr class='bg-emerald-400 flex p-5 gap-5 text-white'>
              <th class='w-1/5'>ID</th>
              <th class='w-4/5'>Name</th>
            </tr>
          "; // start table

          while ($data = $result->fetch_assoc()) {
            $name = $data['name'];
            $id = $data['id'];
            echo "
              <tr class='bg-white flex p-5 gap-5 border-[1px]'>
                <td class='w-1/5 text-center'>$id</td>
                <td class='w-4/5 text-center'>$name</td>
              </tr>
            "; // table data
          }

          echo"
          </table>
          "; // end table
        }

        if ($_POST['pass'].trim() != "root") {
          display("WRONG PASSWORD");
          return;
        }
        
        // change password from "root" (the second one) to "" (default password of wamp)
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
        show_entry($dbase);
      ?>
    </section>
  </body>
</html>
