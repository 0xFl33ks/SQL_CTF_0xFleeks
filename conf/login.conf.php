<?php
  $servername = 'localhost';
  $username  = 'user';
  $password = 'passwd';
  $database = 'dbname';
  $flag = "enter ur flag";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Unable to connect to MYSQL server");
  }
?>
