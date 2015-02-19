<?php

include 'dbconnection.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//deletecomments
$id = $_GET['id'];
$newcomment = $_POST['newcomment'];
$date = date('y-m-d');
$sql = "DELETE FROM comments WHERE comments_id='$id'";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');


//addcomments
$taskname = $_POST['taksname'];
$newcomment = $_POST['newcomment'];
$date = date('y-m-d');
$sql = "INSERT INTO comments (commentcontent, author, connectedtask, created_at) VALUES ('$newcomment', 'Lukas Birringer', '$taskname', '$date')";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');

//updatenotes
$newnotecontent = $_POST['content'];
$id = $_POST['noteid'];

$sql = "UPDATE tasks SET note='$newnotecontent' WHERE tasks_id='$id'";

$db_erg = mysqli_query( $conn, $sql );

header ('Location: ../listdetail.php');

?>