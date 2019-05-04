<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritence</title>
</head>
<body>
	<?php
		class CaptainAmerica extends Avenger{
				public $user;
				public $id;

				public function __construct($name,$pass){
					$this->user=$name;
					$this->id=$pass;
				}
				public function __destruct(){
					if(!empty($this->user) or !empty($this->id)){
						echo"You are selected from Captain america";
					}
				}
		}
	?>
</body>
</html>