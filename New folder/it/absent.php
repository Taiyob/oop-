<?php
	include("db2.php");
if(isset($_REQUEST['submit'])){
//print_r($_REQUEST);
extract($_REQUEST);
if($connect->Insert("user1","FirstName='$fname',country='$country1',name='$name',email='$mail',mobile='$mobile',password='$psw',address='$address',gender='$gender'")){
$msg="Insert Success";
}
else{
$msg="Insert Fail!";
}
}
/**/
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New Item</title>
</head>
<body>
<form action="absent.php" method="post">
First Name:<input type="text" name="fname">

Country:<select name="country1">
	<option value="Bangladesh">Bangladesh</option>
	<option value="India">India</option>
	<option value="Pakistan">Pakistan</option>
</select>



Name:<input type="text" name="name">
<br>
Email:<input type="text" name="mail">
<br>
Mobile:<input type="text" name="mobile">
<br>
Password:<input type="password" name="psw" required>
<br>
Address:<input type="text" name="address">
<br>


Gender:<select name="gender">
	<option value="male">male</option>
	<option value="female">female</option>
	<option value="other">other</option>
</select>
<br>
<input type="submit" name="submit" value="Save">
</form>

</body>
</html>



