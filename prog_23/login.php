<html>

<head>
  <title>Bill Due</title>
</head>

<body>
  <section>
    <div>
      <?php
      function serve_data($database) {
        $tablename = "kseb";
        $mobile = $_POST['mobile'];

        $query = "SELECT * FROM $tablename WHERE mobile=$mobile";

        $result = $database->query($query);
        if ($result->num_rows < 1) {
          echo " <a> Invalid User! </a> ";
          return;
        }
        $data = $result->fetch_assoc();
        display_data($data['mobile'], $data['name'], $data['bill']);
      }

      function display_data($mobile, $name, $bill) {
        echo "
          <div>
            <p> $name </p>
            <p> +$mobile </p>
            <p> $ $bill </p>
          </div>
        ";
      }

      // change this accordingly
      $password = "root";
      $database = new mysqli("localhost", "root", $password, "record");

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
