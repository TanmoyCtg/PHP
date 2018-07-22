<?php
$cars = array(
array("Volvo",14,12),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
	for ($row=0; $row < 4; $row++){
		echo "<p><b>Row number $row</b></p>";
		echo "<ul>";
		for($col=0; $col <3 ; $col++){
			echo "<li>".$cars[$row][$col]."</li>";
		}
	echo "</ul>";
	}

$students= array(
	'raj ' => 22,
	'bobby ' => 23,
	'siraj ' => 24,
	'joy ' => 21,
	'tanzil ' => 43
	 );

foreach ($students as $key => $value) {
	# code...
	echo $key.$value."<br>";
	
}
?>
