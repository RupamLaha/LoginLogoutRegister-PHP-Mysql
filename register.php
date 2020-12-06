<?php

$username = $_POST['username'];
$pass = $_POST['password'];
$encrypt_pass = md5($pass);

if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root','root','login_register');

  $query = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$encrypt_pass')";

  $run = mysqli_query($con,$query);

  if($con){
    echo"Connetion Successful. ";

    if($run){
      echo"Successfully Registered!";
    }
    else{
      echo"Oops! Registration Failed." . mysqli_error($con);
    }
  }else{
    echo"Connection Failed.";
  }

}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login-Logout-Register</title>
  </head>
  <body>
    <div align = "right"><a href="index.php"><h3>Home</h3></a></div>
    <h1 align="center">Register as Admin</h1>
    <div align="center">
      <form action="register.php" method="post">
        <table>
          <tr><td>User Name: </td><td><input type="text" name = "username"></td></tr>
          <tr><td>Password: </td><td><input type="password" name = "password"></td></tr>
        </table>
        <br>
        <input type="submit" name = "submit" value="Register">
      </form>
      <br>
      <a href="login.php">Log In</a>
    </div>
  </body>
</html>
