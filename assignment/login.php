<?php 
	if (isset($_POST['cancel'])){
		header("Location: index.php");
		return;
	}
	$salt = 'XyZzy12*_';
	$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // php123
	$failure = false;  // If we have no POST data
	$user='';
	// Check to see if we have some POST data, if we do process it
	if (isset($_POST["who"]) && isset($_POST["pass"])){
		$user = $_POST['who'];
		$findMe='@';
		$pos = strpos($user, $findMe);
		
		if (strlen($_POST['who'])<1 || strlen($_POST['pass']) <1){
			$failure = 'User name and password are required';
		}
		elseif ($pos === false) {
			$failure="Email must have an at-sign (@)";
		}
		else{
			$check = hash('md5', $salt.$_POST['pass']);
			if ($check == $stored_hash){
				header("Location: autos.php?name=".urlencode(htmlentities($_POST['who'])));
				return;
			}
			else{
				$failure = "Incorrect password";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "bootstrap.php"; ?>
	<title>iftekharchowdhury</title>
</head>
<body>

	<div class="container">
		<h1>Please Log In</h1>
		<?php 
			if ($failure!=false) {echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");}
		?>
		<form method="POST">
			<label for="nam">User Name</label>
			<input type="text" name="who" id="nam"><br/>
			<label for="id_1723">Password</label>
			<input type="text" name="pass" id="id_1723"><br/>
			<input type="submit" value="Log In">
			<input type="submit" name="cancel" value="Cancel">
		</form>	
	</div>

</body>
</html>

