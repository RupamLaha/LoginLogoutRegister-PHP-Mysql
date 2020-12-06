<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login-Logout-Register</title>
  </head>
  <body>
    <?php if(session_id()!= $_SESSION['session_id']){  ?>
      <?php session_destroy(); ?>
    <div align = "right"><a href="login.php"><h3>Admin Login</h3></a></div>
  <?php }else if(session_id() == $_SESSION['session_id']){  ?>
    <div align = "right"><h3>Welcome <?php echo $_SESSION['username']; ?> </h3></div>
    <div align = "right"><a href="logout.php"><h3>Log Out</h3></a></div>
    <div align = "right"><a href="delete.php"><h3>Delete Account</h3></a></div>
  <?php } ?>
    <h1 align="center">Welcome to Laha Foundation</h1>
  </body>
</html>
