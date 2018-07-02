<?php
	$oldguess = '';
	$message = false;
	if (isset($_POST['guess'])){
		$oldguess = $_POST['guess'] + 0;
		if ($oldguess == 42) {$message = "Great job!";}
		else if ($oldguess < 42){ $message = "Too Low!";}
		else {$message = "Too High...";}
	}
?>
<p>Guessing game..</p>
<form method="post">
	<p>
		<label for="guess">Input guess</label>
		<?php
			if ($message !== false){
				echo $message;
			}
		?>
		<input type="text" name="guess" size="40" id="guess" value="<?= htmlentities($oldguess,ENT_QUOTES)?>"/>
	</p>
	<input type="submit" >
</form>
