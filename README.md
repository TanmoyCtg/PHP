# PHP
Here, I write and document all my php code. I also make some project for my future work!

<h1>How to create cookies in php?</h1>
<p>setcookie() creates the cookie.The setcookie() function must appear BEFORE the <html> tag
 You need user name and value. Then set the username in a variable like $cookie_name. cookies saved in user computer
  <h2>How to delete the cookie?</h2>
  setcookie("user",time()-3600);
 <h2>What is Sessions? Tell me something about Sessions</h2>
 Session store user information. This information used in multiple pages.<strong>session does not save in user computer</strong> 
 suppose, you have one application. You want to change application. You change it and close it. Those whole things session variables saves until the browser closed. When the browser closed, session dies. Session holds one single user information.
 <h3>How to start php session?</h3>
 You should use function which is named session_start(). Session variable are set php global variable $_SESSION
 You can print the session the value using print_r() function. Example, print_r($_SESSION).
 <h4>How to destroy the session</h4>
 You just use session_destroy() inside body tag.You can also unset session using session_unset()
 <h4>PHP Fileters???</h4>
 In website if you take input from user, then you need filters. Why?. Because through filtering you cleaning the mess data or remove     illigal character and takes good data. Filtering is good validating and sanitizing data. 
 <b>filter_var() function validate and sanitize usr input.</b> If you want to validate an integer, then you should use FILTER_VALIDATE_INT. For email you should use FILTER_SANITIZE_EMAIL -> this is for sanitize the email and validating FILTER_VALIDATE_EMAIL
<ul>
 <li>filter_has_var() Checks if a variable of a specified input type exist</li>
 <li>filter_id() Returns the filter ID of a specified filter name</li>
 <li>filter_input() Gets an external variable (e.g. from form input) and optionally filters it</li>
 <li>filter_input_array() Gets external variables (e.g. from form input) and optionally filters them</li>
 <li>filter_list() Returns a list of all supported filters</li>
 <li>filter_var_array() Gets multiple variables and filter them</li>
 <li>filter_var() Filters a variable with a specified filter</li>
 </ul>
 <section>
 <h3>PHP error handling</h3>
 <p>You should use die() function.
  
  ```php
   <?php
	// $file = fopen("welcome.txt","r");
	if(!file_exists("welcome.txt")){
		die("File not found");	
	} else{
		$file = fopen("welcome.txt","r");
	}
?>
 
 ```
 ## Creating a custom error handling
 If you want to handle custom error, then you need to create a function which is give a message when error occurs.
 function have two param(error level, error message) 
 
 ```php
  function error($errorno, $errorstr){
  	echo "Error: [$errorno] $errorstr";
	echo "Ending script";
	die();
  }
  
```
###### PHP Exception Handling
###### What is an Exception???
You write a program and it's not show you the desired output.It's stop the prograam because error happens. Exception basically stops
program flow.We don't want stop the program. ** That's why we need to deal with Exception Handling **
 </p>
</section>	
</p>

<section>
	## MySQL
	<ul>
		<li>MySQL is a database system</li>
		<li>Used on the web.</li>
		<li>cross platform. You can use windows and unix</li>
		<li>Basically most of people work with PHP.</li>
	</ul>
	###### What is Query?
	A query is a question or request. When we need information from database we run query.
	## How to connect PHP with MySQL?
	You have two ways.
	<li>MySQLi</li>
	<li>PDO = PHP data objects</li>
	<p>MySQLi means mysql improved. MySQLi only works one database system which is MySQL. But PDO works with 12 different database 		systems. So, it's good to use PDO.</p>
	
		## How to connect PDO with PHP?
	
		```php
	
		<?php 
		$host = "localhost";
		$user = "root";
		$password = "";
		$dbName = 'music';	

		try{
			// set dsn
			$dsn = 'mysql:host='. $host .';dbname='.$dbName;
			// create a PDO instance
			$pdo = new PDO($dsn, $user,$password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo "Connected sucessfully";
		}
		catch(PDOException $e){
			echo "Connection failed: ". $e->getMessage();
		}	

	?>

	```

	
</section>
