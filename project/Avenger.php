<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritence</title>
</head>
<body>
	<?php
		class Avenger{
			public $actor="Hulk: From Avenger";
			public $actress=" Mina: From Avenger";

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