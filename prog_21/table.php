<html>

<head>
  <title>Received Data</title>
</head>

<body>
  <section>
    <h1>Customer Information</h1>
    <div>
      <?php
      function data($heading, $value) {
        echo "
          <div> <h1>$heading</h1> <a>$value</a> </div>
        ";
      }

      // Tables using Flexboxes, you may use <tr> <th> <td> instead
      echo "<div>";

      echo data("Customer No.", $_POST['cno']);
      echo data("Name", $_POST['name']);
      echo data("Place", $_POST['place']);
      echo data("Email", $_POST['email']);
      echo data("Phone No.", $_POST['phono']);

      echo "</div>";
      ?>
    </div>
  </section>
</body>

</html>
