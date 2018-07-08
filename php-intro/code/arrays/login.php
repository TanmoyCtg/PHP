<?php
	if (isset($_GET['cancel'])) {
		header("Location: index.php");
		return;
	}
	$salt = 'XyZzy12*_';
	$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
	$failure = false;
	if (isset($_GET['who']) && isset($_GET['pass'])) {

		if (strlen($_GET['who']) < 1 || strlen($_GET['pass'])<1){

			$failure = "User name and password are required";

		} else {
			
			$check = hash('md5', $salt.$_GET['pass']);

			if ($check == $stored_hash){
				header("Location: game.php?name=".urlencode($_GET['who']));
				return;

			} else{
				$failure = "Incorrect password";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once "bootstrap.php"; ?>
	<title>iftekharchowdhury Login page</title>
</head>
<body>
	<div class="container">
		<h1>Please Log In</h1>
		<?php
			if ($failure !== false){
				echo ('<p style="color: red;">'.htmlentities($failure)."</p>\n");
			}
		?>
		<form method="GET">
			<label for="nam">User Name</label>
			<input type="text" name="who" id="nam"><br>
			<label for="id_1723">Password</label>
			<input type="text" name="pass" id="id_1723"><br/>
			<input type="submit" value="Log In">
			<input type="submit" name="cancel" value="Cancel">
		</form>

		
	</div>

</body>
</html>
