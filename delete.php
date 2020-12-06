<?php

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect('localhost','root','root','login_register');

$query = "DELETE FROM `users` WHERE username = '$username' ";

$run = mysqli_query($con,$query);

if($con){
  echo "Connection Successful. ";
  if($run){
    session_destroy();
    echo "Successfully deleted. ";
    header("Location: login.php");
 }else{
   echo "Oops. Could not delete because, " . mysqli_error($con);
 }
}else{
  echo "Oops,Connection Failed. ";
}

?>
