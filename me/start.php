<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class Object</title>
</head>
<body>
	<?php
		class First{
			public $class = "This is class V";
			public $school = "The name of this school is ACPS";

			public function rahim(){
				echo "He is reading in this school";
			}
			public function karim(){
				echo "He is a student";
			}
		}
		$result = new First;
		echo $result->class;
		echo "<br>";
		echo $result->school;
		echo "<br>";
		$result->rahim();
		echo "<br>";
		$result->karim();
	?>
		<br>
		<br/>
		<br/>
	<?php
		class Second{
			public $class = "This is class X";
			public $school = "The name of this school is ACPS";

			public function rahim(){
				echo "He is reading in this school. " . $this->school;
			}
			public function karim(){
				echo $this->class . " He is a student in this Class.";
			}
		}
		$result = new Second;
		echo $result->class;
		echo "<br>";
		echo $result->school;
		echo "<br>";
		$result->rahim();
		echo "<br>";
		$result->karim();
	?>
		<br/>
		<br/>
		<br/>
	<?php
		class Built{
			public $cricket = "Bangladesh is a cricket Nation country.";
			public $football = "Football is the most enjoyable game in the world.";

			public function games(){
				echo "We love playing Football.";
			}
			public function sports(){
				echo "We love playing Cricket.";
			}
			public function __construct(){
				echo $this->cricket . "<br/>";
			}
			public function __destruct(){
				echo $this->football;
			}
		}
		$solve = new Built;
	?>
		
	<?php
		class she{
			public $toy = "Baby likes toys.";
			const FULLNAME = "Jannatul Yasmin Jarin";

			public function baby(){
				echo she::FULLNAME;
			}
		}
		$dream = new she;
		echo she::FULLNAME. "<br>";
	?>
	<?php
		class still{
			public static $shohan = "student of class nine.";
			public $lisan = " he also student of same class.";

			public static function naughty(){
				//echo "Shohan is a ".still::$shohan."<br>";
				echo "Shohan is a ".self::$shohan."<br>";
			}
			public final function funny(){                   //final mane overright kora jabe na.
				echo "Lisan is a adamjeean and".$this->lisan. "<br/>";
			}
		}
		echo still::$shohan."<br>";
		still::naughty();
	?>
	<?php
		class duplicate extends still{

		}
		$double = new duplicate;
		echo $double->lisan. "<br/>";
		$double->funny();
	?>
	<?php
		class Business{
			public $toyota="Best Car Company.";
			private $south_tech="Best IT Company.";
			protected $ammu="Used in various war.";

			public function car(){
				echo $this->toyota."<br>";
			}
			public function it(){
				echo $this->south_tech."<br>";
			}
			public function pistol(){
				echo $this->ammu."<br>";
			}
		}

		$dollar = new Business;
		$dollar->toyota;
		//$dollar->south_tech;
		//$dollar->ammu;
		$dollar->car();
		$dollar->it();
		$dollar->pistol();

		class same extends Business{

		}
		$same = new same;
		$same->toyota;
		//$same->south_tech;
		//$same->ammu;
		$same->car();
		$same->it();
		$same->pistol();
	?>a
</body>
</html>