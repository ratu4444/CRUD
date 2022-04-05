<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "office";


// Create connection
$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
  die("Connection failed : ". $link->connect_error);
} 

  // Close connection
  // mysqli_close($link);
?>