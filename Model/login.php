<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
header('Content-Type: application/json');

// Check if customer token 

require "database.php";

$thirtyDays = date('Y-m-d', strtotime('-7 days'));

// Check if the user has logged in the past 7 days
$getUserLogin = $conn->execute_query(
    "SELECT
        *
    FROM
        users 
    WHERE
        timestamp >= $thirtyDays"
);


?>