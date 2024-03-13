<html>
  <head>
    <title>Cool</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <div class="bg-white flex flex-col p-5 py-10 gap-10 rounded-lg drop-shadow-lg justify-center items-center ring-2 ring-stone-400">
        <div class="bg-[url('https://i.pinimg.com/originals/92/0b/8b/920b8b713723dfae3ecb370be5337d9a.jpg')] w-52 h-52 rounded-full bg-cover ring-stone-400 ring-4 drop-shadow-xl"></div>
        <?php
          function serve_data($database) {
            $regno = $_POST['regno'];
            $newnum = $_POST['newnum'];
            $tablename = "student";

            if ($newnum != "") { 
              // Update the name if the user has sent a new number on login
              $query = "UPDATE $tablename SET mobile=$newnum WHERE regno='$regno'";
              $database->query($query);
            }

            $query = "SELECT * FROM $tablename WHERE regno='$regno'";

            $result = $database->query($query);
            if ($result->num_rows < 1) {
              echo"
                <a class='text-4xl text-red-400 text-center'>
                  Invalid User!
                </a>
              ";
              return;
            }

            $data = $result->fetch_assoc();
            
            display_data($data['mobile'], $data['name'], $data['regno']);
          }
          
          function display_data($mobile, $name, $regno) {
            echo"
              <div class='flex flex-col p-5 justify-center gap-5'>
                <a class='text-xl text-stone-300 font-semibold relative top-4'>
                  $regno
                </a>
                <a class='text-5xl text-stone-500 font-semibold'>
                  $name
                </a>
                <a class='font-semibold text-white px-2 w-fit bg-stone-400'>
                  +$mobile
                </a>
              </div>
            ";
          }

          $database = new mysqli("localhost", "root", "root", "record");

          if ($database->connect_error) {
            echo "failed to connect to databse";
            return;
          }

          serve_data($database);
        ?>
      </div>
    </section>
  </body>
</html>
