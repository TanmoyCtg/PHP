<?php
	
	require_once 'pdo.php';
	
	session_start();
	$failure = false;
	$ok = "record inserted";
	if (isset($_POST['login'])){

		$username = htmlentities($_POST['username']);
		$email = htmlentities($_POST['email']);
		$password = $_POST['password'];

		if (empty($username)){
			$failure = "please submit username";
		}
		elseif(empty($email)){
			$failure = "please submit email";
		}
		elseif (empty($password)) {
			$failure = "hey!where is password?";
		}
		else{
			
			$sql = "INSERT INTO customer (name,email,password) VALUES(:name,:email,:password)";
			$statement = $pdo-> prepare($sql);
			$statement->execute(array(
				':name'=>$username,
				':email'=>$email,
				':password'=>$password)
			);	
		}
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>log in </title>
</head>
<body>
	<h1>Please log in</h1>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<div class="row">
				<div class="col">
					<?php
						if ( $failure !== false ) :
    						echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
						endif;
					?>
					<label for="exampleInputfirstName">User Name</label>
      				<input type="text" name="username" class="form-control" placeholder="User name">
    			</div>
			</div>
		</div>

  		<div class="form-group">

	    	<label for="exampleInputEmail1">Email address</label>
	    	<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		
  		<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  		</div>
  		<button type="submit" class="btn btn-primary" name="login">login</button>
	</form>	



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php 
    if ($failure == false) :
    	echo('<p style="color: green;">'.htmlentities($ok)."</p>\n");
    endif;

$sql = "SELECT * FROM customer ORDER BY name, id ASC";
$sql1 = "DELETE FROM customer WHERE id=9";
$statement = $pdo-> prepare($sql);
$statement-> execute();
$stat = $pdo -> prepare($sql1);
$stat -> execute(); 

$table = "<table class='table'>";
$table.= "<tr><b><td>ID</td><td>username </td><td>email </td></b></tr>";
while ($row = $statement -> fetch(PDO::FETCH_ASSOC)){
	$table.= "<tr>";
	$table.= "<td>".$row['id']."</td>";
    $table.= "<td>".$row['name']."</td>";
    $table.= "<td>".$row['email']."</td>";
    $table.= "</tr>";
}
	$table.= "</table>";
	echo $table;

    ?>
</body>
</html>