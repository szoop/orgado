<?php
include 'dbconnection.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$newnotecontent = $_POST['content'];
$id = $_POST['noteid'];

$sql = "UPDATE tasks SET note='$newnotecontent' WHERE tasks_id='$id'";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');
?>