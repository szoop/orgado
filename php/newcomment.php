<?php
include 'dbconnection.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$taskname = $_POST['taksname'];
$newcomment = $_POST['newcomment'];
$date = date('y-m-d');
$sql = "INSERT INTO comments (commentcontent, author, connectedtask, created_at) VALUES ('$newcomment', 'Lukas Birringer', '$taskname', '$date')";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');
?>