<?php 
/**
 * 
 */
class Foo
{
	public $bar;
	public $lar;
	public $jar;
	function __construct()
	{
		# code..
		$this->bar = function(){
			return 42;
		};
		$this->lar = function(){return 292;};
		$this->jar = function(){
			$x = 3;
			if ($x % 2 != 0){
				echo "$x odd number";
			} else{
				echo "$x even number\n";
			}
			$y = 5;
			for ($i=1; $i <11 ; $i++) { 
				# code...
				echo "<br>";
				echo  $y * $i,"<br>";
				
			}

			$r = 'one\'s string another docstring'; 
			return $r;
		};
	}
}

$obj = new Foo();

echo ($obj->bar)(),PHP_EOL;
echo ($obj->lar)(),PHP_EOL;
echo ($obj->jar)(),PHP_EOL;
?>
