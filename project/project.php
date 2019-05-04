<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritence</title>
</head>
<body>
	<?php
		include 'Avenger.php';
		include 'CaptainAmerica.php';
		include 'IronMan.php';
		include 'Loki.php';


		$movie = new Avenger;
		$movie->actor;
		$movie->actress;
		$movie->good_actor();
		$movie->good_actress();

		$hero_one = new CaptainAmerica('OLI','007');

		$strt="Md";
		$nick="Taiyob";
		$hero_two = new IronMan();
		$hero_two->details($strt,$nick);


		$hero_three = new Loki;
		$hero_three->car_details('red','rd009');
		$hero_three->car_company();
		$hero_three->good_actress();
		

	?>
</body>
</html>