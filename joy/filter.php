<?php
	$number = 100;
	$name = "<h1>iftekhar joy<h1>";
	$newName = filter_var($name, FILTER_SANITIZE_STRING);

		if (!filter_var($number, FILTER_VALIDATE_INT) === false){
			echo $number." is valid";
		} else{
			echo $number. " is not valid";
		}

	echo "<br>".$newName."<br>";

	// sanitize and validate an email address

	$email = "john.doe@.com";
	// Remove all illegal characters from email
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	//validate e-mail
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
		echo ("$email is a valid email address");
	}
	else{
		echo "$email is not a valid email address";
	}
	echo "<br>";

	$url = "https://www.w3schools.com";

	// Remove all illegal characters from a url
	$url = filter_var($url, FILTER_SANITIZE_URL);

	// Validate url
	if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
	    echo("$url is a valid URL");
	} else {
	    echo("$url is not a valid URL");
	}

?>
