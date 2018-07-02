<!DOCTYPE html>
<html>
<head>
	<title>iftekharchowhdury Rock, Paper, Scissors Game</title>
	<?php require_once "bootstrap.php"; ?>
</head>
<body>
	<div class="container">
		<h1>Rock Paper Scissors</h1>
		<?php
			if (isset($_REQUEST['name'])){
				echo "<p>Welcome: ";
				echo htmlentities($_REQUEST['name']);
				echo "</p>\n";
			}
		?>
	
	<form method="post">
		<select name="human">
			<option value="-1">Select</option>
			<option value="0">Rock</option>
			<option value="1">Paper</option>
			<option value="2">Scissors</option>
			<option value="3">Test</option>
		</select>
		<input type="submit" value="Play">
		<input type="submit" name="logout" value="Logout">		
	</form>
	</div>
</body>
</html>