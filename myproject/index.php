<!DOCTYPE html>
<html>
<head>
	<title>sona mona</title>
</head>
<body>
	<a href="add.php">BACK</a>
</body>
</html>
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

	echo('<table border="1">'."\n");
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