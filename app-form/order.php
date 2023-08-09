<?php
// Example form input with checkbox values for materials
if (isset($_POST['materials']) && is_array($_POST['materials'])) {
    $selectedMaterials = $_POST['materials'];
} else {
    $selectedMaterials = array();
}


session_start();

// Example form input for other fields


$user_name = $_SESSION['user_name'];
$docName = $_POST['doc_name'];
$patName = $_POST['pat_name'];
$labName = $_POST['lab_name'];
$labType = $_POST['lab_type'];
$recDate = $_POST['rec_date'];
$order_state = 'قيد الانتظار';

// Connect to the database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'order-list';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for the prices of selected materials
if (!empty($selectedMaterials)) {
    $selectedMaterialsString = implode("','", $selectedMaterials);
    $sql = "SELECT SUM(price) AS total_price FROM prices WHERE material IN ('$selectedMaterialsString')";
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $totalPrice = $row['total_price'];
            echo "Total price: $" . number_format($totalPrice, 2);
        } else {
            echo "Error: No results found";
            $totalPrice = 0;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $totalPrice = 0;
    }
} else {
    echo "Error: No materials selected";
    $totalPrice = 0;
}

// Insert the order into the orders table
$sql = "INSERT INTO orders (username, doc_name, pat_name, lab_name, lab_type, rec_date, price, order_state) VALUES ('$user_name', '$docName', '$patName', '$labName', '$labType', '$recDate', '$totalPrice', '$order_state')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../order list/index.php")
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>