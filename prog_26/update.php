<html>

<head>
  <title>Cool</title>
</head>

<body>
  <section>
    <div>
      <?php
      function serve_data($database) {
        $regno = $_POST['regno'];
        $newnum = $_POST['newnum'];
        $tablename = "student";
        $updated = false;

        if ($newnum != "") {
          // Update the name if the user has sent a new number on login
          $query = "UPDATE $tablename SET mobile=$newnum WHERE regno='$regno'";
          $database->query($query);
          $updated = true;
        }

        $query = "SELECT * FROM $tablename WHERE regno='$regno'";

        $result = $database->query($query);
        if ($result->num_rows < 1) {
          echo "<a> Invalid User! </a>";
          return;
        }

        $data = $result->fetch_assoc();

        display_data($data['mobile'], $data['name'], $data['regno'], $updated);
      }

      function display_data($mobile, $name, $regno, $updated) {
        echo "
              <div>
                <a> $regno </a>
                <a> $name </a>
                <a> +$mobile </a>
        ";

        if ($updated) { // display text if the phone number is updated
          echo "<a>updated</a>";
        }
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
