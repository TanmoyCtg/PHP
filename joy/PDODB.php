<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	

	try{
		// set dsn
		$dsn = 'mysql:host='. $host;
		// create a PDO instance
		$pdo = new PDO($dsn, $user,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE myDBPDO";
		$pdo->exec($sql);
		echo "Database Created sucessfully<br>";


	}
	catch(PDOException $e){
		echo $sql . "<br>".  $e->getMessage();
	}	

	$pdo=null;

?>
