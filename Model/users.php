<?php

require "database.php";

$_POST = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$date_of_birth = "{$_POST['year']}-{$_POST['month']}-{$_POST['day']}"; 
$firstName     = $_POST['first_name'];
$lastName      = $_POST['last_name'];
$email         = $_POST['email'];

$insertSql = "INSERT INTO users (`first_name`, `last_name`, `date_of_birth`, `email`, `timestamp`) VALUES ('$firstName', '$lastName', '$date_of_birth', '$email', NOW())";

if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
  }
?>