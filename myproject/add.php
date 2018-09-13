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
</head>
<body>
<div>
  <a href="index.php" class="button_link">Back to List</a>
</div>
<div class="frm-add">
<h1 class="demo-form-heading">Add New Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
  	<?php if (isset($_SESSION['title_error'])){
  		echo ('<p style="color: red;">'.htmlentities($_SESSION['title_error'])."</p>\n");
  		unset($_SESSION['title_error']);
  	} ?>
	  <label>Title: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
  	<?php if (isset($_SESSION['description_error'])){
  		echo ('<p style="color: red;">'.htmlentities($_SESSION['description_error'])."</p>\n");
  		unset($_SESSION['description_error']);
  	} ?>
	  <label>Description: </label><br>
	  <textarea name="description"  rows="5"  ></textarea>
  </div>
  <div class="demo-form-row">
  	<?php if (isset($_SESSION['date_error'])){
  		echo ('<p style="color: red;">'.htmlentities($_SESSION['date_error'])."</p>\n");
  		unset($_SESSION['date_error']);
  	} ?>
	  <label>Date: </label><br>
	  <input type="date" name="post_at" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Add" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>


