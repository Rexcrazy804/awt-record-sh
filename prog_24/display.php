<html>

<head>
  <title>Form</title>
</head>

<body>
  <section>
    <div>
      <?php
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $register = $_POST['regnum'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];

      echo "
            <div style='display:flex; flex-direction:column'>
              <a> Name: $fname $lname </a>
              <a> Email: $email </a>
              <a> Register: #$register </a>
              <a> Gender: $gender </a>
            </div>
      ";
      ?>
    </div>
  </section>
</body>

</html>
