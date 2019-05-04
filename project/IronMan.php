<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritence</title>
</head>
<body>
	<?php
		class IronMan extends Avenger{
				public $fast_name;
				public $last_name;

				public function details($fast,$last){
					$this->fast_name=$fast;
					$this->last_name=$last;
					echo "His First Name is {$this->fast_name} and Last Name is {$this->last_name} From Iron Man<br>";
				}
		}
	?>
</body>
</html>