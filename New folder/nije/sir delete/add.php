<?php
include("db2.php");
if(isset($_REQUEST['submit'])){
	//print_r($_REQUEST);
	extract($_REQUEST);
	if($connect->Insert("users","FirstName='$fname'")){
		$msg="Insert Success";
	}
	else{
		$msg="Insert Fail!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Item</title>
</head>
<body>
<form action="add.php" method="post">
First Name:<input type="text" name="fname">
<input type="submit" name="submit" value="Save">
</form>
</body>
</html>