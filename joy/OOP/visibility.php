<?php 
	class MyClass{
		public $pub = 'Public';
		protected $prot = "protected";
		private $pri = "private";

		function printHello(){
			echo $this->pub."<br>";
			echo "<br>".$this->prot."\n";
			echo $this->pri."\n";
		}
	}

	$obj = new MyClass();
	echo "<br>";
	echo $obj->pub."<br>";
	echo $obj->prot."<br>"; // gives error
	echo $obj->pri."<br>"; // gives error
	echo $obj->printHello();
?>
