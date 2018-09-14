<?php 
	session_start();
	require_once "pdo.php";
	if (isset($_SESSION['success'])) {
		echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    	unset($_SESSION['success']);
	}
	$sql = "SELECT * FROM info";
	$statment = $pdo->prepare($sql);
	$statment -> execute();

	// echo('<table border="1">'."\n");
	echo ("<table class='table table-bordered'>");
	echo("<th>". "Title"."</th>");
	echo("<th>". "Description"."</th>");
	echo("<th>". "Time"."</th>");
	echo("<th>". "Action"."</th>");

	while($row= $statment -> fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td>";
    	echo(htmlentities($row['title']));
    	echo "</td><td>";
    	echo (htmlentities($row['description']));
    	echo "</td><td>";
    	echo (htmlentities($row['post_time']));
    	echo "</td><td>";
    	echo('<a href="edit.php?id='.$row['id'].'">Edit</a> / ');
    echo('<a href="delete.php?id='.$row['id'].'">Delete</a>');
    echo("</td></tr>\n");

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>sona mona</title>
	<meta charset="utf-8">
  	<?php require_once "bootstrap.php" ?>
</head>
<body>
	<div class="container">
		<h1>
			<a href="add.php"><span class="label label-default">Add New Record</span></a>
		</h1>
		<h2>
			<a href="login.php"><span class="label label-default">Logout</span></a>
		</h2>
	</div>
	
</body>
</html>











