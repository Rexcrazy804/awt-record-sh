<html>

<head>
  <title>Delete </title>
</head>

<body>
    <?php
    function show_entry($dbase) {
      $query = "SELECT * FROM register";
      $result = $dbase->query($query);
      if ($result->num_rows < 1) {
        return;
      }

      echo "<table> <tr> <th>ID</th> <th>Name</th> </tr>"; // start table

      while ($data = $result->fetch_assoc()) {
        $name = $data['name'];
        $id = $data['id'];
        echo " <tr> <td>$id</td> <td>$name</td> </tr> "; // table data
      }

      echo "</table>"; // end table
    }

    if ($_POST['pass'] != "root") {
      echo "WRONG PASSWORD";
      return;
    }

    // change password from "root" (the second one) to "" (default password of wamp)
    $dbase = new mysqli("localhost", "root", "root", "record");
    if ($dbase->connect_error) {
      echo "Failed to connect to database";
    }

    $regno = $_POST['regno'];
    $query = "DELETE FROM register WHERE id=$regno";
    $dbase->query($query);

    if ($dbase->affected_rows > 0) {
      echo "Succesfully Deleted Register Entry";
    } else {
      echo "Failed to Delete Entry";
    }

    show_entry($dbase);
    ?>
</body>

</html>
