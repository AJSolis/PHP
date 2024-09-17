<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

require "database.php";

// Define SQL query to fetch users
$fetchUsersSQL = "SELECT * FROM users ORDER BY first_name DESC";

// Execute the query
$result = $conn->query($fetchUsersSQL);

if ($result === false) {
    // Fetch and output the results
    echo "<pre>";
    var_dump($result->fetch_all(MYSQLI_ASSOC));
    echo "</pre>";
} elseif ($result->num_rows === 0) {
    // Handle case where no users are found
    echo "No users found!";
} else {
    // Handle query execution error
    echo "Error executing query: " . $conn->error;
}

$conn->close();

?>