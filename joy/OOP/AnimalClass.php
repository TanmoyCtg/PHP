<?php 
// PartyAnimal class declare
class PartyAnimal{
	 // constructor
	function  __construct(){
		echo ("constructed\n");
	}
	// methods
	function something(){
		echo ("Something\n");
	}
	// class destructor automatic call
	function __destruct(){
		echo ("Destruct\n");
	}	
}

echo ("--one\n");	
$x = new PartyAnimal();
echo ("--Two\n");
$y = new PartyAnimal();
echo("--Three\n");

$x-> something();
$y->something();
echo ("--The End?\n");
?>
