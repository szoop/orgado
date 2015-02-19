<?php
include 'php/dbconnection.php';
 
$sql = "SELECT * FROM tasks";
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
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
<header class="col-md-12"><a href="index.php">
	<div class="logo col-md-8 col-md-offset-2">Orgado.</div></a>
</header>

<h3 class="col-md-8 col-md-offset-2">meine erste todoliste</h3>

<div class="addataskbtn item col-md-8 col-md-offset-2 taskid<?php echo $zeile['tasks_id'] ?>">
	<h3 class="taskname">Add a task</h3>
</div>

<?php while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC)) { ?>




<div class="item col-md-8 col-md-offset-2 taskid<?php echo $zeile['tasks_id'] ?>">

	
     	<input type="checkbox" name="checkboxes" id="checkbox">
    	<a class="expander<?php echo $zeile['tasks_id'] ?>" href="#" >
    		<h3 class="taskname"><?php echo $zeile['tasks_name'] ?></h3>
  		</a>
	<span class="labels"><?php echo $zeile['labels'] ?> </span>

	<div class="content<?php echo $zeile['tasks_id'] ?> clear-both"><hr>
		<div class="usersdisplay">
			<h3>Users</h3><hr> <?php echo $zeile['users'] ?>
		</div>
		<div class="notedisplay">
			<form method="post" action="php/functions.php">
				<h3>Notiz</h3><hr><textarea name="content" class="form-control" rows="3"><?php echo $zeile['note'] ?> </textarea>
				<input type="hidden" name="noteid" class="form-control" value="<?php echo $zeile['tasks_id'] ?>">
				<input type="submit" class="btn btn-default" value="Speichern">
			</form>
		</div>	
		<div class="sharedisplay">
			<h3>Share</h3><hr>
		    <ul class="share-buttons">
			<li><a href="#"><img src="img/Facebook.png"></a></li>
			<li><a href="#"><img src="img/Pinterest.png"></a></li>
			<li><a href="#"><img src="img/Wordpress.png"></a></li>
			<li><a href="#"><img src="img/Email.png"></a></li>
			</ul>
		</div>
		<div class="commentsdisplay">
			<h3>Comments:</h3><hr> 
			<form method="post" action="php/functions.php">
				<input class="form-control newcomment" name="newcomment" type="text" placeholder="kommentar schreiben...">
				<input type="hidden" name="taksname" value="<?php echo $zeile['tasks_name'] ?>">
				<input type="submit" class="btn btn-default savecommentbtn" value="Kommentar speichern">
			</form>

			<?php
			$thisid = $zeile['tasks_name'];

			$sql2 = "SELECT * FROM comments WHERE connectedtask='$thisid'";
			 
			$db_erg2 = mysqli_query( $conn, $sql2 );

			while ($zeile = mysqli_fetch_array( $db_erg2, MYSQL_ASSOC)) { ?>
			<blockquote>
				<p><?php echo $zeile['commentcontent'] ?></p>
				<footer><?php echo $zeile['author'] ?> at <?php echo $zeile['created_at'] ?></cite></footer>
				<a href="php/functions.php?id=<?php echo $zeile['comments_id'] ?>" class="deletecomment"> l&ouml;schen</a>
			</blockquote>

			

			<?php } ?>
		</div>		
	</div>

</div>

<?php } ?>

<!-- Jquery ausklappen der Tasks -->
<script type="text/javascript">
 	$('.content1').hide();
	$( '.expander1' ).click(function() {
 		$('.content1').fadeToggle();
	});
	$('.content2').hide();
	$( '.expander2' ).click(function() {
 		$('.content2').fadeToggle();
	});



</script>
</body>
</html>


