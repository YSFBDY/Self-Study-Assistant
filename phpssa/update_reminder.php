<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssa"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from Flutter app
$selected_date_b = $_POST['selected_date_before'];
$selected_date_a = $_POST['selected_date_after'];
$label_b = $_POST['label_before'];
$label_a = $_POST['label_after'];// Adjust this based on your Flutter code

// SQL query to update data
$sql = "UPDATE reminder SET label = '$label_a', deadline = '$selected_date_a' WHERE label = '$label_b' AND deadline = '$selected_date_b'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
