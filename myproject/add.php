<?php  
	session_start();
	require_once 'pdo.php';

	if (isset($_POST['add_record'])){

		if (empty($_POST['post_title'])){ 
			$_SESSION['title_error'] = 'set the title';
		}
		elseif (empty($_POST['description'])) {
			# code...
			$_SESSION['description_error'] = 'write the description';
		}
		elseif (empty($_POST['post_at'])) {
			$_SESSION['date_error'] = 'set the date';
		}
		else{
			$sql = "INSERT INTO info (title,description, post_time) VALUES (:title, :description, :post_time)";
			$statement = $pdo-> prepare($sql);
			$result = $statement->execute(array( 
				":title" => $_POST['post_title'],
				":description" => $_POST['description'],
				":post_time" => $_POST['post_at'] 
			));

			if (!empty($result)) {
				$_SESSION['success'] = 'Record Inserted';
				header("Location: index.php");
			}

		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>PHP PDO CRUD - Add New Record</title>
<meta charset="utf-8">

<?php require_once "bootstrap.php" ?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<button type="button" class="btn btn-success">
		<h3>
	  		<a href="index.php"  >
	  			<span>Back</span>
	  		</a>
	  	</h3>
	</button>

	<div class="frm-add">
		<h1 class="demo-form-heading"><span class="label label-default">Add New Record</span></h1>
		
		<form name="frmAdd" action="" method="POST">
	  	
		  	<div class="form-group">
			  	<?php if (isset($_SESSION['title_error'])){
			  		echo ('<p style="color: red;">'.htmlentities($_SESSION['title_error'])."</p>\n");
			  		unset($_SESSION['title_error']);
			  	} ?>

			  	<label class="control-label ">Title </label><br>
			  	<div class="col-sm-6">
			  		<input type="text" name="post_title" class="form-control" />	
			  	</div>
		  </div><br>
		  
		  <div class="form-group">
		  	<?php if (isset($_SESSION['description_error'])){
		  		echo ('<p style="color: red;">'.htmlentities($_SESSION['description_error'])."</p>\n");
		  		unset($_SESSION['description_error']);
		  	} ?>
			  <label>Description: </label><br>
			  <textarea name="description"  rows="5"  cols="50" ></textarea>
		  </div>
		  
		  <div class="form-group">
		  	<?php if (isset($_SESSION['date_error'])){
		  		echo ('<p style="color: red;">'.htmlentities($_SESSION['date_error'])."</p>\n");
		  		unset($_SESSION['date_error']);
		  	} ?>
			<label>Date: </label><br>
			<input type="date" name="post_at"  />
		  </div>

		  <div class="form-group">
			  <input name="add_record" type="submit" value="Add" >
		  </div>

	  </form>
	</div> 
</div>
</body>
</html>


