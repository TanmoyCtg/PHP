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
		('joy','DOE','joy@example.com'),
		('alam','islam','alam@example.com'),
		('isteak','abd','isthiek@example.com'),
		('naila','binte','nailes@example.com'),
		('maya','chow','maya@example.com')";
		
		$pdo->exec($sql);
		echo "Table MyGuests created successfully";
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	$pdo = null;
?>
