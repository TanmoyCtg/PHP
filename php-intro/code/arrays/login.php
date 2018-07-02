<?php
	if (isset($_POST['cancel'])) {
		header("Location: index.php");
		return;
	}
	$salt = 'XyZzy12*_';
	$stored_hash = 'a8609e8d62c043243c4e201cbb342862';
	$failure = false;
	if (isset($_POST['who']) && isset($_POST['pass'])) {

		if (strlen($_POST['who']) < 1 || strlen($_POST['pass'])<1){

			$failure = "User name and password are required";

		} else {
			
			$check = hash('md5', $salt.$_POST['pass']);

			if ($check == $stored_hash){
				header("Location: game.php?name=".urlencode($_POST['who']));
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
		<form method="post">
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
