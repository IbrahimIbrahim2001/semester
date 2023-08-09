<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "order-list";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// $doc_name = $_GET['doc_name'];

// Execute a query to retrieve data
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);


if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

// Convert the resultset into a JSON object
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$json_data = json_encode($data);

// Output the JSON data
header("Content-Type: application/json");
echo $json_data;
?>