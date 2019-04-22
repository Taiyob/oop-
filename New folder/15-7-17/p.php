<?php

	$students= [["name"=>"Razib", "mob"=>"0192", "address"=>"Dhaka, Bangladesh" ,"subj"=>"Math"],
				["name"=>"Habib", "mob"=>"01732", "address"=>"Rajshahi, Bangladesh"],
				["name"=>"Chandan", "mob"=>"0175", "address"=>"Pabna, Bangladesh"],
				["name"=>"Haider", "mob"=>"01845", "address"=>"DOHS, Bangladesh", "subj"=>"Math"]];

	$month= [
						"January"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"Feb"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"March"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"Apr"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"May"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"Jun"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"July"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"Aug"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
						"Sep"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
					"Oct"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
					"Nov"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
				"Dec"=>[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]];

	$day=['Sat', 'Sun', 'Mon', 'Twe', 'Wed', 'Tus', 'Fry']	;			
?>
<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1px">
			<?php
			echo "<tr>";
				foreach ($students[0] as $k =>$v) {
					echo "<td>$k</td>";
				}
			echo "</tr>";
			
				foreach ($students as  $student) {
					echo "<tr>";
					foreach ($student as  $value) {
						echo "<td>$value</td>";
					}
					echo "</tr>";
				}
			?>
		</table>

		<table border="1px">
			<?php
			echo "<tr>";
			foreach ($month as $key => $value) {
				echo "<td>$key</td>";
			}
				
			echo "</tr>";
			echo "<tr>";
			foreach ($day as  $value) {
				echo "<td>$value</td>";
				foreach ($value as $v) {
					echo "<td>$v</td>";
				}
			}
			echo "</tr>";
			?>
		</table>

</body>
</html> -->

<!-- Class is a blue print of object.
Object : A real / physical product from class

Class===>1. Proparties	Access privilige / visibility.
		2.	Mathord		Access privilige / visibility.

		i.		Public		1.	Class 2.	Child 3.	Anybody
		ii.		Protected	1.	Class 2.	Child
		iii.	Private		1.	Only access for them self. -->

	<!-- 	<?php
			
			
			/*class A
			{
				privet $x=10;

				public function setval($val)
				{
					echo $this->x;
				}
			}
			$obj = new A;
			$obj ->setval();
			//echo $obj ->x;*/

		?> -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<table border="1">
		<tr>
			<td colspan="7" align="center">January</td>
		</tr>
		<tr>
			<?php 
				foreach ($day as $value) {
					echo "<td>$value</td>";
				}
			 ?>
		</tr>
		<tr>
			<?php
				foreach ($month as  $m) {
					foreach ($m as $d) {
						echo "<td>$d</td>";	
										
					}

				}
			?>
		</tr>
	</table>

</body>
</html>


<?php
	$sdate= new datetime("12-4-1960");
	$edate= new datetime("5-10-2017");
	$interval= $sdate->diff($edate);
	echo "Difference :".$interval->y." Year".$interval->m." Month".$interval->d." Date";


?>
<?php 
class php85{
private $table;
public function getTable($students){
$this->table="<table border=\"1\" cellpadding=\"5\">";
$this->table.="<tr>";
foreach($students[0] as $k=>$v){
$this->table.="<td>".ucfirst($k)."</td>";
}
$this->table.="</tr>";
foreach ($students as $student) {
$this->table.="<tr>";
foreach ($student as $val){
$this->table.= "<td>$val</td>"; 
}
$this->table.= "</tr>";
}
$this->table.="</table>";
return $this->table;
}
}
$students=[
[ "name"=>"Abul Hossian", "mobile"=>"0172", "address"=>"Dhaka,Bangladesh"],
[ "name"=>"Abul Mannan", "mobile"=>"0182", "address"=>"Chittagong,Bangladesh"],
[ "name"=>"Abul Jahangir", "mobile"=>"0192", "address"=>"Noakhali,Bangladesh"],
[ "name"=>"Abul Malik", "mobile"=>"0162", "address"=>"Rajshahi,Bangladesh"],
[ "name"=>"Abul Kalek", "mobile"=>"0152", "address"=>"Kustia,Bangladesh"],
[ "name"=>"Abul mia", "mobile"=>"0142", "address"=>"Rungpur,Bangladesh"],
[ "name"=>"Abul mia", "mobile"=>"0142", "address"=>"Rungpur,Bangladesh"],
];
$obj=new php85;
echo $obj->getTable($students);
?>