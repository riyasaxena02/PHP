<?php
$servername = "remotemysql.com";
$username = "iphAyU6EV1";
$password = "lRUE1PT2Ks";
$dbName = "codexworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>