<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constructor,Destructor</title>
</head>
<body>
	<?php
		class Person{
			public $name=" Md Oli Ullah";
			public $age=" 25";

			public function person_name(){
				echo "His full name is".$this->name;
			}
			public function person_age(){
				echo " His age is".$this->age;
			}
			public function __construct(){
				echo "constructor ready<br>";
			}
		}

		$result = new Person;
		$result->name;
		$result->age;
		$result->person_name();
		$result->person_age();
	?>
	<?php
		class People{
			public $title;
			public $time;
			public $id;

			public function details(){
				echo "His full name is {$this->title} and age is {$this->time}"."<br>";
			}
			public function __construct($val_one,$val_two){
				$this->title=$val_one;
				$this->time=$val_two;
			}
			public function setId($val_three){
				$this->id=$val_three;
			}
			public function __destruct(){
				if (!empty($this->id)) {
					echo "Saving";
				}
			}
		}
		$value = new People(" Taiyob"," Regular");
		$value->details();
		$value->setId('15');
	?>
	<?php
		class Userdata{
			public $user;
			public $id;
			const SHE = "Nusrat Yasmin Jarin";
			public static $age=15;

			public function __construct($nick,$pass){
				$this->user=$nick;
				$this->id=$pass;
			}
			public function __destruct(){
				if (!empty($this->user) or !empty($this->id)) {
					echo "You are selected<br>";
				}
			}
			public static function details(){
				echo "Her full name is :". Userdata::SHE;
				echo " And age is :". self::$age."<br>";
			}
		}


		class Admin extends Userdata{
			echo "He is "$this->user."and he is "$this->id;
				
		}


		$name = "Oli";
		$id = "12";
		//$sol=new Userdata($name,$id);
		echo "<br>";
		//echo $sol->details();
		Userdata::details();
		$user="Boss";
		$id=1;
		$ad=new Admin($user,$id);

	?>
</body>
</html>