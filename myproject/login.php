<?php 
	session_start();
	$salt = 'XyZzy12*_';
	$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		
		$email = htmlentities($_POST['email']);
		$pass  = htmlentities($_POST['pass']);

		if (empty($email) & empty($pass)){
			$_SESSION['error'] = 'please fill the form';
		}
		elseif (is_numeric($email) || strlen($email)<2){
			$_SESSION['error'] = "email can't be numeric";
		}
		else{
			
			if (isset($email) && isset($pass)){
				$check = hash('md5', $salt.$_POST['pass']);
				
				if ($check == $stored_hash){

					header('Location: index.php?name='.urlencode($_POST['email']));
					error_log("Login success ".$_POST['email']);
					$_SESSION['success'] = true;
				
				} else {

					$failure = "Incorrect password";
					error_log("Login fail ".$_POST['email'].$check);
					$_SESSION['error'] = "Incorrect password";
					header('Location: login.php');
					return;
					}
			}
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
  	<?php require_once "bootstrap.php"; ?>
</head>
<body>
	<div class="container">
		
		<h1>Please Login</h1>
		
		<?php

			if ( isset($_SESSION['error']) ) {
	    	echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
	    	unset($_SESSION['error']);
	  	}

		?>

		<form method="POST">

			<div class="form-group">
				<label for="email">User Name</label>
				<input type="text" name="email"> <br/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="pass" ><br/>
			</div>
			<input type="submit" value="Log In" name="login">
		</form>
	</div>
</body>

</html>