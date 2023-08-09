<?php

// Connect to the database using a secure connection and charset
$conn = new PDO('mysql:host=localhost;dbname=order-list;charset=utf8mb4', 'root', '');

// Get the ID of the data to be deleted
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

// Validate the value parameter
if (isset($_GET['value'])) {
    $value = $_GET['value'];
} else {
    // Handle invalid input
    echo 'Invalid value parameter';
    exit;
}

// Prepare the query with parameters
$stmt = $conn->prepare("UPDATE orders SET order_state = :orderState WHERE id = :id");

// Bind the parameters
$stmt->bindParam(':orderState', $orderState, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Set the parameters
$orderState = $value;

// Execute the query
$stmt->execute();

// Check for errors
if ($stmt->errorCode() != 0) {
    echo 'Error updating data: ' . $stmt->errorInfo[2];
} else {
    // Redirect to a trusted location
    header('Location: /semester/notification/index.php');
}

// Close the database connection
$conn = null;

?>