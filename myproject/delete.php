<?php 
session_start();
require_once "pdo.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$sql = "DELETE FROM info WHERE id=".$_GET['id'];
	$statment = $pdo->prepare($sql);
	$statment -> execute();
	$_SESSION['success'] = "record deleted";
	header("location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
<h2>Do you want to delete?</h2>
<form method="POST">
<input type="submit" name="delete" value="Delete">
<a href="index.php">Cancel</a>	
</form>

</body>
</html>