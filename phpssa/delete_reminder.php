    <?php
    // Establish a connection to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ssa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from Flutter app
    $label = $_POST['label']; // Adjust this based on your Flutter code
    $deadline = $_POST['deadline']; // Adjust this based on your Flutter code

    // SQL query to delete data
    $sql = "DELETE FROM reminder WHERE label = '$label' AND deadline = '$deadline'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
    ?>
