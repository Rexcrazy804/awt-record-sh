<?php
session_start();
?>
<html>

<head>
  <title>Session</title>
</head>

<body>
  <section>
    <h1> Sessions </h1>
    <div>
      <form action="create.php" method="post">
        <input type="text" name="color" placeholder="Favourite Color" required />
          <input type="submit" value="<?php if (isset($_SESSION['color'])) { echo 'Update'; } else { echo 'Create'; }?>" /> 
      </form>
      <?php
      if (isset($_SESSION['color'])) {
        echo "<p class='text-lg'>your favourite color is " . $_SESSION['color'] . "</p>";
        echo " <a href='destroy.php'> Destroy Session </a> ";
      }
      ?>
    </div>
  </section>
</body>

</html>
