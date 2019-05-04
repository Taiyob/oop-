<?php include 'link.php';?>
<?php
		if (isset($_POST['submit'])) {
			$num_one = $_POST['num1'];
			$num_two = $_POST['num2'];


			if (empty($_POST['num1'] or $_POST['num2'])) {
				echo "Field not be empty.";
			}

			$cal=new Calculate;
			$cal->addition($num_one,$num_two);
			$cal->sub($num_one,$num_two);
			$cal->mul($num_one,$num_two);
			$cal->div($num_one,$num_two);
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP</title>
</head>
<body>
	<?php
		class Start{
			public $name;
			public $age;

			public function person_name(){
				echo "The full name is : ".$this->name."<br/>";
			}
			public function person_age($value){
				echo "Age is : ".$this->age=$value;
			}
		}
		$result = new Start;
		$result->name="MD OLI ULLAH";
		$result->person_name();
		$result->person_age(20);
	?>
	<form action="" method="post">
		<input type="number" name="num1"><br/>
		<input type="number" name="num2"><br/>
		<input type="submit" name="submit" value="cauculate"><br/>
	</form>

	<?php
		class Auto{
			public $nam;
			public $boyos;

			
		}
	?>

</body>
</html>