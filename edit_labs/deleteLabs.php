<?php
//Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'my_labs');

// Get the ID of the data to be deleted
$id = $_GET['id'];
echo $id;
// Delete the data from the database
$sql = "DELETE FROM labs WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// Send a response back to the client
if ($result) {
  header('Location: http://localhost/semester/edit_labs/index.php');
} else {
  echo 'Error deleting data.';
}

// Close the database connection
mysqli_close($conn);

?>