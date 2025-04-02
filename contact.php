<?php
// Include the database connection
include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL query to insert form data into the database
    $sql = "INSERT INTO contacts (first_name, last_name, phone, email, message)
            VALUES ('$first_name', '$last_name', '$phone', '$email', '$message')";

    // Execute query and check if data is inserted
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>