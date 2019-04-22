<?php
include ("db2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show All Data</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
.test{
	background-color: #ccc;
}
</style>

</head>
<body>
<?php
$students=$connect->getAll("students","*");
//$student=$connect->getById("students","*","id=1");
//print_r($student);
echo $connect->getTable($students);
?>
</body>
</html>