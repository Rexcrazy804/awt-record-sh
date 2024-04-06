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
      <?php session_destroy(); ?>
      <h1>
        Session Destroyed Succesfully
      </h1>
      <a href="index.php">return</a>
    </div>
  </section>
</body>

</html>
