<?php
$error = '';
$confirmMsg = '';
if (filter_has_var(INPUT_POST, 'submit')){
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	if (empty($password) || empty($confirmPassword)){
		$error = "enter password";
	}
	else{
		if (($password) == ($confirmPassword)){
			if (strlen($password) > 6 && strlen($confirmPassword) > 6  ){ 
				$confirmMsg = "thank you! it's ok!";
			} else{
				$error = "use char and number together.at least 7 digit";
			}	
		}	
		else{
			$error = "password don't match";	
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<?php
		if ($error == true){echo $error."<br>";}
		else{ echo $confirmMsg."<br>";}		
	?>
	<label>password</label>
	<input type="password" name="password" ><br>
	<label>confirm password</label>
	<input type="password" name="confirmPassword">
	<input type="submit" name="submit">
</form>
</body>
</html>