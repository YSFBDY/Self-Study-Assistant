<?php 
	$db = mysqli_connect('localhost','root','','ssa');

	$selected_date = $_POST['selected_date'];
	$label = $_POST['label'];



	$sql = "INSERT INTO `reminder` (`label`, `deadline`) VALUES ('$label', '$selected_date')";

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


