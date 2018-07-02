<?php
	$str = "I told : 'E= mc^2' ";
	echo htmlentities($str,ENT_QUOTES);

	// $stuff = array("Hi", "There");
	// echo $stuff[1],"\n";

	// // key/value
	// $stuff = array("name" => "Chuck","course" => "WA4E");
	// echo $stuff["course"],"\n";
	// echo ("<pre>\n");
	// $var1 = "124";
	// $v2 = 23;
	// $arrayName = array('subj1' =>"phy" ,"subj2"=>"engl", "subj3"=>"chemistry" );
	// print_r($arrayName);// it will print the whole array.Key is inside the bracktes.
	// var_dump($arrayName); 
	// var_dump($v2, $var1);
	// // var_dump shows how many items in the array and array item type and value
	// // print_r($something); // if you want to know variable information then use print_r
	// echo ("\n</pre>\n");
	// print_r($var1."\n");
	// print_r($v2);
	// $thing = FALSE;
	// print_r($thing);
	// var_dump($thing);
	// $za = array();
	// $za["name"] = "Chuck";
	// $za["course"] = "w4ae";
	// print_r($za);
	// var_dump($za);
	// $stuff = array("name" => "Chuck", "Course"=>"SI664");
	/*
	$stuff = array ("joy","physics");
	foreach ($stuff as $key => $value) {
		# code...
		echo "Key=",$key," Val=",$value,"\n";
	}
	echo "<br>";
	for($i = 0; $i < count($stuff); $i++){
		echo "I=",$i,"value=",$stuff[$i];
	}
	echo "<br>";
	$products = array(
		'paper' => array(
			'copier'=> "Copier & Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'photo' => "Photographic Paper"),
		'pens' => array(
			'ball'=> "Ball Point",
			'hilite' => "Highliters",
			'marker' => "Markers"),
		'misc' => array(
			'tape' => "Sticky Tape",
			'glue' => "Adhesives",
			'clips'=> "PaperClips")
	);
	echo $products["pens"]["marker"]; echo "<br>";
	echo $products['paper']['copier']; echo "<br>";
	echo $products['misc']['tape']; echo "<br>";

	$username = $_GET['user'] ?? 'nobody';
	$username = isset($_GET['user']) ? $_GET['user']:'nobody';
	$usrname = $_GET['user'] ?? $_POST['user'] ?? 'nobody';


	$za = array();
	$za["name"] = "Chuck";
	$za["course"] = "WA4E";
	$za["id"] = 1428829;
	$za["university"] = "AIUB";
	$za["topic"] = 'PHP';
	print_r($za);
	sort($za);
	print_r($za);
	if (array_key_exists("name", $za)){
		echo ("Course exists\n");
	}else{
		echo("Course does not exists\n");
	}

	echo isset($za['name']) ? "name is set\n" : "name is not set\n";
	echo isset($za['addr'])? "address is not set\n":"address is set\n";
	echo isset($za["id"]) ? "show me your id\n".$za[id] : "where is your id\n";

*/
$stuff = array('course'=>'PHP-intro','topic'=>'Arrays');
echo (isset($stuff['section']));

// $inp = "This is a sentence with seven words";
// $temp = explode(' ', $inp);
// print_r($temp);



































?>