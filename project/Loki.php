<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritence</title>
</head>
<body>
	<?php
		class Loki extends Avenger{
				public $car;
				public $color;
				public $actor="Jet Li: Polymorpisom in loki from Avenger";
				public $actress=" Zhang: Polymorpisom in loki from Avenger";

				public function car_details($col,$nam){
					$this->car=$nam;
					$this->color=$col;
					echo "The color of this the car is {$this->color} and the name this car is {$this->car} from Loki<br>";
				}
				public function car_company(){
					echo "The name of this car company is Toyota. From Loki <br>";
				}
				public function good_actor(){
				$this->actor;
				$this->actress;
				}
				public function good_actress(){
					echo $this->actor."<br>".$this->actress."<br>";
				}
		}
	?>
</body>
</html>