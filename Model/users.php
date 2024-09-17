<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

require "database.php";

if (!empty($_POST) && is_array($_POST)) {
  $_POST = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $date_of_birth = "{$_POST['year']}-{$_POST['month']}-{$_POST['day']}"; 
  $firstName     = $_POST['first_name'];
  $lastName      = $_POST['last_name'];
  $email         = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  if (!$email || !ctype_alpha($firstName) || !ctype_alpha($lastName)) {
    return false;
  }

  $insertSql = "INSERT INTO users (first_name, last_name, date_of_birth, email, timestamp) VALUES ('$firstName', '$lastName', '$date_of_birth', '$email', NOW())";

  if ($conn->query($insertSql) === true) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
  }
}
?>