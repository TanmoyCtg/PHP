<?php 
	if (isset($_POST['cancel'])){
		header("Location: index.php");
		return;
	}

	// Global variable
	$salt = 'XyZzy12*_';
	$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // php123
	$failure = false;  // If we have no POST data
	
	// when the login clicked

	if (isset($_POST['login'])){

		// local var
		$user =htmlentities($_POST['who']);
		$pass =$_POST['pass'];
		$findMe='@';
		$pos = strpos($user, $findMe);

		// user and pass not enter
		if (!(isset($user) || isset($pass))) {
			$failure = 'User name and password are required';
		}
		// user name enter but pass not enter
		elseif( !isset($pass) ) {
			$failure = 'User name and password are required';
		}
		elseif ($pos === false) {
			$failure="Email must have an at-sign (@)";
		}
		else {
			// check the password
			$check = hash('md5', $salt.$pass);
			error_log("Login fail ".$user." $check");
			if ($check == $stored_hash){
				header("Location: autos.php?name=".urlencode(htmlentities($user)));
				error_log("Login success ".$user);
				return;
			} else {
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
			<input type="submit" name ="login" value="Log In">
			<input type="submit" name="cancel" value="Cancel">
		</form>	
	</div>

</body>
</html>

