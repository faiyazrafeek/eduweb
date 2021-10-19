<?php

$servername = "remotemysql.com";
$username = "f0ybxrlmLO";
$password = "Bx0WGyvFt6";
$dbname = "f0ybxrlmLO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>