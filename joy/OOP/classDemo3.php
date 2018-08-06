<?php 
	class MyClass{
		const CONSTANT = 'contant value';
		const joy = "joy is constant";

		function showConstant() {
			echo self::CONSTANT ."\n";
		}
	}
	echo MyClass::CONSTANT ."\n";
	echo MyClass::joy."\n";

	$classname = "MyClass";
	echo $classname::CONSTANT ."\n";
	echo $classname::joy."<br>";

	$class = new MyClass();
	$class->showConstant();

	echo $class::CONSTANT."\n";
?>
