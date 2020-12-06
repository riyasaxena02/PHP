<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "saas"; 

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
  $to=$_POST['to'];
  $from=$_POST['from'];
  $date=$_POST['date'];
  $duration=$_POST['duration'];
}

$sql = "INSERT INTO `call` (`from`,`to`,`date`,`duration`) VALUES ('$from', '$to', '$date', '$duration');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: http://localhost/PHP/thanks.html');
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>