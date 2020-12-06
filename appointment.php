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
  $date=$_POST['date'];
  $email=$_POST['email'];
}

$sql = "INSERT INTO `appointment` (`date`,`email`) VALUES ('$date', '$email');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: http://localhost/PHP/thanks.html');
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>