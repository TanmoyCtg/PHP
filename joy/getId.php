<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbName = "mydbPDO";
	try{
		$dsn = 'mysql:host='. $host .';dbname='.$dbName;
		$pdo = new PDO($dsn, $user,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		// sql create to table
		$sql = "insert into MyGuests(firstname,lastname,email)
		VALUES
		('joy','DOE','joy@example.com')";
		$pdo->exec($sql);
		$last_id = $pdo->lastInsertId();
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	$pdo = null;
?>
