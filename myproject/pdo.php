<?php

$username = "root";
$password = "";


try{

	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=blog',$username,$password);
	// See the "errors" folder for details...
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
} catch(PDOException $e){
	echo "connection failed: ". $e->getMessage();
}

