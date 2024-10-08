<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `reminder`";

$result = $conn->query($sql);

if ($result) {
    $gradeData = [];
    while ($row = $result->fetch_assoc()) {
        $gradeData[] = $row;
    }
    echo json_encode($gradeData);
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
