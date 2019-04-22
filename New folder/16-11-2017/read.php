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
if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	echo "<center><br><span class='text-info'>Do you want to delete?</span>&nbsp;&nbsp;&nbsp;<a href=\"read.php?confirm_del=$id\" class='btn btn-danger'>Yes</a>&nbsp;&nbsp;&nbsp;<a href=\"read.php\" class='btn btn-success'>No</a></center>";
	//echo $id;
}
if(isset($_REQUEST['confirm_del'])){
	$cdel_id=$_REQUEST['confirm_del'];
	//echo "Preparing for Delete";
if($connect->Delete("students","id=$cdel_id")){
		$msg="<span class='btn btn-success'>Delete Success</span>";
	}
	else{
		$msg="<span class='btn btn-danger'>Delete Fail!</span>";
	}
}


$students=$connect->getAll("students","*","edit.php");
//$student=$connect->getById("students","*","id=1");
//print_r($student);
echo $connect->getTable($students);
?>
</body>
</html>