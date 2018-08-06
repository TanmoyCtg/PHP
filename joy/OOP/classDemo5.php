<?php 
	class BaseClass{
		function __construct(){
			print "In BaseClass constructor\n";
			echo "<br>";
		}
	}
	class SubClass extends BaseClass{
		function __construct(){
			parent::__construct();
			print "In SubClass constructor<br>";
		}
	}
	class OtherSubClass extends BaseClass{
		function __construct(){
			parent::__construct();	
		}		
	}
	// in baseclass constructor
	$obj = new BaseClass();
	$obj = new SubClass();
	$obj = new OtherSubClass();
?>
