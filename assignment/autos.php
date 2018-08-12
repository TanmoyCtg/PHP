<?php 
	echo "<pre>\n";
	require_once "pdo.php";
	
	if ( !isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
 		die('Name parameter missing');
	}

	if (isset($_POST['cancel'])){
		header("Location: index.php");
		return;
	}

	$failure = false;
	$success = false;
	$mileage = $year = $make = '';
	try{
		$sql = '';
		if (isset($_POST['add'])){
			$mileage = htmlentities($_POST['mileage']);
			$year = htmlentities($_POST['year']);
			$make = htmlentities($_POST['make']);
			
			if (!(is_numeric($mileage) && is_numeric($year)) ){
				$failure = "Mileage and Year must be numeric";
			}
			elseif (empty($make) || strlen($make)<1 || is_numeric($make)) {
				$failure = "Make is required";
			}
			else{
				$sql = "INSERT INTO autos (make, year, mileage) VALUES (:make, :year, :mileage)";
		    	$stmt = $pdo->prepare($sql);
		    	$stmt->execute(array(
		        	':make' => $make,
		        	':year' => $year,
		        	':mileage' => $mileage)); 

		    	$success = 'Record inserted';
			}
		}
}
	catch(PDOException $e){
		echo $sql . "<br>". $e->getMessage();
	}

	$stmt = $pdo->query("SELECT make,year,mileage FROM autos");
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>iftekharchowdhury</title>
</head>
<body>
		<h1>Tracking Autos for csev@umich.edu</h1>
		<?php 
			if ($failure!=false) {
				echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
			} else{
				echo('<p style="color: green;">'.htmlentities($success)."</p>\n");
			}

		?>
		<form method="post">
			<p>Make:<input type="text" name="make" size="40"></p>
			<p>Year:<input type="text" name="year" size="40"></p>
			<p>Mileage:<input type="text" name="mileage" size="40"></p>
			<input type="submit" name="add" value="Add">
			<input type="submit" name="cancel" value="logout">
		</form>
		<h2>Automobiles</h2>
		<?php
			foreach ($rows as $row) {
				# code...	
				echo "<li>".$row['year'].' '. "<b>".$row['make']."</b>".'/ '.$row['mileage']."</li>";
			}
		?>

	
</body>
</html>

