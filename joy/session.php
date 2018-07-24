<?php
	session_start();
?>

<html>
<body>
<?php
// you have to set session variable
$_SESSION['name '] = "jooh";
$_SESSION['job'] = 'student';
echo "session variable are set";
print_r($_SESSION);
session_destroy();

?>


</body>
</html>
