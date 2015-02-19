<?php
include 'dbconnection.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET['id'];
$newcomment = $_POST['newcomment'];
$date = date('y-m-d');
$sql = "DELETE FROM comments WHERE comments_id='$id'";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');
?>

