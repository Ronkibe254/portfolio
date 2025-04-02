<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

// Check if the connection is successful
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
}
?>

