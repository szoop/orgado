<?php
include 'php/dbconnection.php';
 
$sql = "SELECT * FROM todolist";
 $db_erg = mysqli_query( $conn, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
?>
<html>
<head>
	<title>Orgado - Todo</title>

	<!-- Bootstrap Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/base.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<header class="col-md-12">
	<div class="logo col-md-8 col-md-offset-2">Orgado.</div>
</header>
<?php while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC)) { ?>

<a href="listdetail.php?id=<?php echo $zeile['todolist_id'] ?>">
<div class="item col-md-8 col-md-offset-2">
<h3><?php echo $zeile['todolist_name'] ?></h3>
</div>
</a>
<?php } ?>

</body>
</html>

