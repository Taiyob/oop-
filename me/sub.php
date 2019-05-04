<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inherutence</title>
</head>
<body>
	<?php 
		class Userdata{
			public $user;
			public $id;
			

			public function __construct($nick,$pass){
				$this->user=$nick;
				$this->id=$pass;
			}
			
			public  function details(){
				echo "I am ".$this->user." And age is ".$this->id;
			}
		}


		class Admin extends Userdata{
			
				
		}


		$name = "Oli";
		$id = "12";
		$sol=new Userdata($name,$id);
		echo "<br>";
		echo $sol->details();
		$user="Boss";
		$id=1;
		$ad=new Admin($user,$id);
		$ad->details();

	?>
</body>
</html>