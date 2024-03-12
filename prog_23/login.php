<html>
  <head>
    <title>Bill Due</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="w-full h-screen flex flex-col justify-center items-center p-4 gap-4">
      <div class="bg-white p-8 gap-10 flex flex-col md:flex-row rounded-xl drop-shadow-md items-center">
        <?php
          function serve_data($database) {
            $tablename = "kseb";
            $mobile = $_POST['mobile'];

            $query = "SELECT * FROM $tablename WHERE mobile=$mobile";

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
            display_data($data['mobile'], $data['name'], $data['bill'], $data['profile']);
          }
          
          function display_data($mobile, $name, $bill, $profile) {
            echo"
              <div class='bg-[url($profile)] w-52 h-52 bg-center bg-cover rounded-full'>
              </div>
              <div class='flex flex-col p-5 gap-2'>
                <p class='text-5xl font-semibold text-zinc-600'>
                  $name
                </p>
                <p class='text-xl font-semibold text-zinc-300'>
                  +$mobile
                </p>
                <p class='text-6xl font-semibold text-emerald-500 mt-3'>
                  $ $bill
                </p>
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
