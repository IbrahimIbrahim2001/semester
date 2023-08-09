<?php

// Your code to establish a database connection
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_signin_singup";

// Establish a database connection
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

$newUsername = $_POST['user_name'];
$newPassword = $_POST['password'];
$newDoctorName = $_POST['name_doc'];
$newPhoneNumber = $_POST['phone'];
$newClinicName = $_POST['clinic_name'];
$newClinicAddress = $_POST['clinic_address'];

// Assuming you have the username stored in a session variable
$username = $_SESSION['user_name'];

// Hash the password
// $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Prepare the SQL query to update the table
$sql = "UPDATE user SET username = :new_username, doctor_name = :doctor_name, phone_number = :phone_number, clinic_name = :clinic_name, clinic_address = :clinic_address WHERE username = :username";

// Prepare the statement
$stmt = $pdo->prepare($sql);

// Bind the values to the parameters
$stmt->bindValue(':new_username', $newUsername);
$stmt->bindValue(':hashed_password', $hashedPassword);
$stmt->bindValue(':doctor_name', $newDoctorName);
$stmt->bindValue(':phone_number', $newPhoneNumber);
$stmt->bindValue(':clinic_name', $newClinicName);
$stmt->bindValue(':clinic_address', $newClinicAddress);
$stmt->bindValue(':username', $username);

// Execute the statement
if ($stmt->execute()) {
    // header('Location: http://localhost/semester/profile-doc/index.php');
    echo "Data updated successfully.";
} else {
    echo "Error updating data.";
        // header('Location: http://localhost/semester/profile-doc/index.php?error=1');

}

?>