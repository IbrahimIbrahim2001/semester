<?php

session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_signin_singup";

// Get the currently logged-in user's username
$userUsername = $_SESSION['user_name']; // Assuming you have the user's username stored in a session variable

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "SELECT username, password, doctor_name, phone_number, clinic_name, clinic_address FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing SQL statement: " . $conn->error);
}

// Bind the parameter
$stmt->bind_param("s", $userUsername);

// Execute the query
if ($stmt->execute() === false) {
    die("Error executing SQL query: " . $stmt->error);
}

// Get the result set
$result = $stmt->get_result();

// Fetch the row of data
$userData = $result->fetch_assoc();

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();

// Check if the user data exists
if ($userData) {

      // Create an associative array to hold the user data
    $responseData = array(
        'username' => $userData['username'],
        'doctor_name' => $userData['doctor_name'],
        'password' => $userData['password'], // Assuming the password is stored as plaintext
        'phone_number' => $userData['phone_number'],
        'clinic_name' => $userData['clinic_name'],
        'clinic_address' => $userData['clinic_address']
    );
    } else {
        echo "User information not found.";
    }

$json = json_encode($responseData);

echo $json;


?>