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
		$sql = "create table MyGuests(
		id int(6) unsigned auto_increment primary key,
		firstname varchar(30) not null,
		lastname varchar(30) not null,
		email varchar(50),
		reg_date TIMESTAMP)";
		
		$pdo->exec($sql);
		echo "Table MyGuests created successfully";
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	$pdo = null;
?>
