<?php
	// connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "my_labs";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	// get data from form
	$lab_name = $_POST['clinic_name'];
	$dr_name = $_POST['doc_name'];
	$lab_category = $_POST['type'];
	$lab_location = $_POST['location'];

	// insert data into labs table
	$sql = "INSERT INTO labs (lab_name, dr_name, lab_category, lab_location)
	VALUES ('$lab_name', '$dr_name', '$lab_category', '$lab_location')";

	if ($conn->query($sql) === TRUE) {
		header('Location: http://localhost/semester/edit_labs/index.php');
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// close connection
	$conn->close();
?>