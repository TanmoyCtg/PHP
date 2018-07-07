<?php

	$msg = '';
	$msgClass = '';
	//Check for submit
	if (filter_has_var(INPUT_POST, 'submit')){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);	
		$message = htmlspecialchars($_POST['message']);

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		// check required fields
		if (!empty($email) && !empty($name) && !empty($message)){
			//passed
			//check email
			if (filter_var($email,FILTER_VALIDATE_EMAIL) === false){
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			}
			else{
				$toEmail = 'support@traversymedia.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
						<h4>Name</h4><p>'.$name.'</p>
						<h4>Email</h4><p>'.$email.'</p> 
						<h4>Message</h4><p>'.$message.'</p>';
				//Email Headers
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
				// Additional headers
				$headers = "From: ".$name. "<".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
						// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<body>

	<div class="container">
		<?php if($msg != ''): ?>
			<?php echo $msgClass ;?><?php echo $msg;?>
		<?php endif; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<label>name</label><br>
			<input type="text" name="name" value="<?php echo isset($_POST['name'])?$name: '';?>"><br>
			<label>Email</label>
			<input type="text" name="email" value="<?php echo isset($_POST['email'])?$email: '';?>"><br>
			<label>Message</label>
			<textarea name="message"><?php echo isset($_POST['message'])? $message: '';?></textarea><br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</body>
</html>