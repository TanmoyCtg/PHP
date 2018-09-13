<?php 
session_start();
require_once 'pdo.php';
if (isset($_POST['update_record'])){
	if (empty($_POST['post_title']) || is_numeric($_POST['post_title'])){
		$_SESSION['title_error'] = "update title";
	}
	elseif(empty($_POST['description']) || is_numeric($_POST['description'])){
		$_SESSION['description_error'] = 'update description';
	}
	elseif(empty($_POST['post_at'])){
		$_SESSION['date_error'] = "fix the date";
	}
	else{

	$sql = "UPDATE info set title='".htmlentities($_POST['post_title']). "', description='". htmlentities($_POST['description'])."', post_time='" .htmlentities($_POST['post_at'])."' WHERE id=".$_GET["id"];

	$statment = $pdo->prepare($sql);
	$result = $statment->execute();
	$_SESSION['success'] = "record updated";
	if (isset($result)) {
		header('location: index.php');
	}
}
}
// $pdo_statement = $pdo->prepare("SELECT * FROM info where id =" .$_GET["id"]);
// $pdo_statement -> execute();
// $result=$pdo_statement-> fetchALL();

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
<h1 class="demo-form-heading">Update Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
  	<?php if (isset($_SESSION['title_error'])){
  		echo ('<p style="color: red;">'.htmlentities($_SESSION['title_error'])."</p>\n");
  		unset($_SESSION['title_error']);
  	} ?>
	  <label>Title: </label><br>
	  <input type="text" name="post_title"  />
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
	  <input name="update_record" type="submit" value="update" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>

