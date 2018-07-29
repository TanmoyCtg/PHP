<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbName = "mydbPDO";

	try{

		$dsn = 'mysql:host='. $host .';dbname='.$dbName;
		$pdo = new PDO($dsn, $user,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		// prepare sql and bind parameters
		$stmt = $pdo->prepare("insert into MyGuests(firstname,lastname,email)
		VALUES (:firstname,:lastname,:email)");

		$stmt->bindParam(':firstname',$firstname);
		$stmt->bindParam(':lastname',$lastname);
		$stmt->bindParam(':email',$email);

		// insert a row
		$firstname = "iftekhar";
		$lastname="chy";
		$email = "chy@example.com";
		$stmt->execute();

		// insert another row
		$firstname = "Mary";
		$lastname = "Moe";
		$email = "mary@example.com";
		$stmt->execute();

		// insert another row
		$firstname = "Julie";
		$lastname = "Dooley";
		$email = "julie@example.com";
		$stmt->execute();
		
		echo "New record created successfully";
	}

	catch(PDOException $e){
		echo "ERROR: ". "<br>" . $e->getMessage();
	}
	$pdo = null;
?>
