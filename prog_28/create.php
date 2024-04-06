<?php
session_start();
?>
<html>

<head>
  <title>Create</title>
</head>

<body>
  <section>
    <div>
      <h1>
        Color
        <?php if (isset($_SESSION['color'])) {
          echo 'Updated';
        } else {
          echo 'Created';
        } ?>
        Succesfully
      </h1>
      <?php
      $color = $_POST['color'];
      $_SESSION['color'] = $color;
      ?>
      <a href="index.php">return</a>
    </div>
  </section>
</body>

</html>
