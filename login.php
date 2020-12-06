<?php

$username = $_POST['username'];
$pass = $_POST['password'];
$encrypt_pass = md5($pass);

if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root','root','login_register');

  $query = "SELECT * FROM `users` WHERE username = '$username' and password = '$encrypt_pass'";

  $run = mysqli_query($con,$query);

  $count = mysqli_num_rows($run);

  if($con){
    echo"Connetion Successful.";

    if($run){
      if($count == 1){
        session_start();
        $_SESSION['username'] = $username;
        //$r = session_id();
        $_SESSION['session_id'] = session_id();
      echo" Successfully Logged In! Session Id : " . $_SESSION['session_id'];
      header("Location: index.php");
    }
    else{
      echo"Oops! Login Failed." . mysqli_error($con);
    }
  }
    else{
      echo"Oops! Login Failed." . mysqli_error($con);
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
    <h1 align="center">Admin Login</h1>
    <div align="center">
      <form action="login.php" method="post">
        <table>
          <tr><td>User Name: </td><td><input type="text" name = "username"></td></tr>
          <tr><td>Password: </td><td><input type="password" name = "password"></td></tr>
        </table>
        <br>
        <input type="submit" name = "submit" value="Login">
      </form>
      <br>
      <a href="register.php">Register as admin</a>
    </div>
  </body>
</html>
