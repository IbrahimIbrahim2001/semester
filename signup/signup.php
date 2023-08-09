<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone_number = $_POST['phone'];
		$doctor_name = $_POST['doctor'];
		$clinic_name = $_POST['clinic'];
		$clinic_address = $_POST['address'];
		$gender = $_POST['gender'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$conn = mysqli_connect('localhost', 'root', '', 'user_signin_singup');

		$sql = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header('Location: index.php?error=1');
			exit;
		} else {
			$sql = "INSERT INTO user (username, password, phone_number, doctor_name, clinic_name, clinic_address, gender)
					VALUES ('$username', '$hashed_password', '$phone_number', '$doctor_name', '$clinic_name', '$clinic_address', '$gender')";
			if (mysqli_query($conn, $sql)) {
				$_SESSION['username'] = $username;
				$_SESSION['phone_number'] = $phone_number;
				$_SESSION['doctor_name'] = $doctor_name;
				$_SESSION['clinic_name'] = $clinic_name;
				$_SESSION['clinic_address'] = $clinic_address;
				$_SESSION['gender'] = $gender;
				header('Location: ../../semester/');
				exit;
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	}
?>