<?php
$client = new MongoDB\Client(
  'mongodb+srv://Riya:MongoPHP@cluster0.599yk.mongodb.net/saas?retryWrites=true&w=majority');

$db = $client->saas;
$collection = $db->message;

$fromErr = $toErr = $dateErr = "";
$from = $to = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["from"])) {
    $fromErr = "From number is required";
  } else {
    $from = test_input($_POST["from"]);
  }

  if (empty($_POST["to"])) {
    $toErr = "To number is required";
  } else {
    $to = test_input($_POST["to"]);
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }
}

$document = array( 
  "from" => '$from', 
  "to" => '$to', 
  "date" => '$date'
);

$collection->insert($document);
echo "Document inserted successfully";
?>