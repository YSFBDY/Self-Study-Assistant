<?php 
	$db = mysqli_connect('localhost','root','','ssa');

	$email = $_POST['email'];
	$password = $_POST['password'];
    $username = $_POST['username'];


	$sql = "INSERT INTO `user_data` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

	$result = mysqli_query($db, $sql);

	if ($result) {
		// Insertion successful
		echo json_encode("Success");
	} else {
		// Insertion failed
		echo json_encode("Error: " . mysqli_error($db));
	}

	mysqli_close($db);

?>