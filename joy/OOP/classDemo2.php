<?php 
class A{
	function foo(){
		if (isset($this)){
			echo '$this is defined(';
			echo get_class($this);
			echo ")\n";
		} else{
			echo "\$this is not defined.\n";		
		}
	}
}

class B{
	function bar(){
		A::foo();
	}
}
// class A object created
$a = new A();
$a->foo(); // call foo() 

A::foo();

$b = new B(); // class B object created
$b->bar(); 

B::bar();
?>
