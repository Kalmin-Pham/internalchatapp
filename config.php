<?php
  $hostname = "localhost";
  $username = "id17034893_ngoc";
  $password = "0D_Dm7N3%J7f0&-r";
  $dbname = "id17034893_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
