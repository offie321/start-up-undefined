<?php
//Stap 1
$servername = "localhost";
$username = "root";
$password = "";
$database = "startup-undefined";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
