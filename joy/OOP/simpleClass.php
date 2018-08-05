<?php 
// class definitions starts with class keyword, then class name
// A valid class name starts with letter or underscore
// Inside class there are variables(called "properties"), constants and functions(called "methods")
	class SimpleClass{
		// property declaration
		public $var = 'a default value';
		public $num = 1;
		public $num2 = 2;
		// method declare
		public function displayVar(){
			echo $this->var;
			echo $this->num;
			echo $this->num2;
		}
	}

$simpleClass = new SimpleClass();
$simpleClass-> displayVar();
?>
