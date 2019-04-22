<?php
include("db2.php");
if(isset($_REQUEST['submit'])){
	//echo $_REQUEST['name'];
	//print_r($_REQUEST);
	extract($_REQUEST);
	//echo $mobile;
	//$x=$_REQUEST['name'];
	if($connect->Insert("students","name='$name',mobile='$mobile',address='$address'")){
		header("location:read.php");
	}
	else{
		$msg="Insert Fail!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body style="width:500px; margin: 0 auto">
	<?=@$msg;?>
<form action="insert.php" method="post">
	<table class="table table-bordered table-hover table-stripped table-condensed">
		<tr>
			<th class="text-center" colspan="2">Add New Student</th>
		</tr>
		<tr>
			<th class="text-right">Name</th>
			<td><input type="text" name="name" class="form-control"></td>
		</tr>
		<tr>
			<th class="text-right">Mobile</th>
			<td><input type="text" name="mobile" class="form-control"></td>
		</tr>
		<tr>
			<th class="text-right">Address</th>
			<td><textarea name="address" cols="50" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" class="text-center"><input type="submit" name="submit" value="Save!" class="btn btn-info"></td>
		</tr>
	</table>
</form>
</body>
</html>