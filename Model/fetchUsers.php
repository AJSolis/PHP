<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
header('Content-Type: application/json');

// Include the database connection file
require "database.php";

// Define SQL query to fetch users
$fetchUsersSQL = "SELECT * FROM users ORDER BY first_name DESC";

// Execute the query
$result = $conn->query($fetchUsersSQL);

$users = [];

if ($result->num_rows > 0) {
    // Fetch data and push it into the array
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Return JSON response
echo json_encode($users);

$conn->close();

?>
