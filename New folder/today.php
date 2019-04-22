<?php
	$sdate= new datetime("12-4-1960");
	$edate= new datetime("5-10-2017");
	$interval= $sdate->diff($edate);
	echo "Difference :".$interval->y." Year".$interval->m." Month".$interval->d." Days";
	echo "<br>";

?>
<?php
	class getSet{
		public $a;
		public function get(){
			return $this->a;
		}
	}
	$obj=new getSet;
	$obj->a="Hellow";
	echo $obj->get();
?>
<?php
	//class getSet{
	//	private $a;
	//	public function get(){
	//		return $this->a;
	//	}
	//}
	//$obj=new getSet;
	//$obj->a="Hellow";
	//echo $obj->get();
?>
<?php
	class getSet1{
		private $a;
		public  function set($v){
			$this->a=$v;
		}
		public function get(){
			return $this->a;
		}
	}
	$obj=new getSet1;
	$obj->set("Hi");
	echo $obj->get();
	
?>
<?php
	class Mathmetics{
		public function sum($n1,$n2){
			return $n1+$n2;
		}
	}
	$obj=new Mathmetics;
	echo $obj->sum(5,7);
?>
<?php
	class Member{
		public $username;
		private $loggedIn=false;
		public function login(){
			$this->loggedIn=true;
		}
		public function isloggedIn(){
			if($this->loggedIn){
				return $this->username."is Logged In";
			}
			else{
				return $this->username."is LoggedOut";
			}
		}
		public function logout(){
			$this->loggedIn=false;
		}
	}
	$x=new Member;
	$x->username="Razib";
	//echo $x->isloggedIn();
	//$x->login();
	//echo $x->isloggedIn();
	$x->logout();
	echo $x->isloggedIn();
	echo "<br>";
?>
<?php
	class B{
		public function sayHellow(){
			echo "Hi<br>";
		}
		public function __destruct(){
			echo "Bye Bye<br>";
		}
		public function __construct (){
			echo "Welcome<br>";
		}
	}
	$obj=new B;
	$obj->sayHellow();
?>
<!-- <?php
	/*class A
			{
				private $x=10;

				public function setval($val)
				{
					echo $this->x;
				}
			}
			$obj = new A;
			$obj ->setval();
			echo $obj ->x;*/

?> -->

<h1>Today</h1>

<?php
	class A{
		protected $c;
		private $a;
		public $b;
		public function get(){
			return $this->b;
		}
	}
	$obj=new A;
	$obj->b="America";
	echo $obj->get();



?>

<?php
	class php85{
		private $table;
		public function getTable($rows,$cols){
			$this->table="<table border=\"1\" cellpadding=\"5\" width=\"500\" height=\"500\">";
				for($i=0;$i<=$rows;$i++){
					$this->table.="<tr>";
						for($y=1;$y<=$cols;$y++){
							$this->table.="<td></td>";
						}
					$this->table.="</tr>";	
				}
				$this->table.="</table>";
				return $this->table;
		}
	}
	$obj=new php85;
	echo $obj->getTable(5,6);

?>

<!--<?php
	/*class php85{
		private $table;
		public function getTable($rows,$cols,$width,$height,$cellpadding){
			$this->table="<table border=\"1\" cellpadding=\"$cellpadding\" width=\"$width\" height=\"$height\">";
				for($i=0;$i<=$rows;$i++){
					$this->table.="<tr>";
						for($y=1;$y<=$cols;$y++){
							$this->table.="<td></td>";
						}
					$this->table.="</tr>";	
				}
				$this->table.="</table>";
				return $this->table;
		}
	}
	$obj=new php85;
	echo $obj->getTable(5,6,500,200,5);*/

?> -->

<?php
	/*$students=[
		["name"=>"Abdul Motin","mobile"=>"01680364436","address"=>"Dhaka"],
		["name"=>"Abdul Asad","mobile"=>"01676522568","address"=>"Comilla"],
		["name"=>"Abdul Jobbar","mobile"=>"01854138817","address"=>"Noakhali"],
		["name"=>"Abdul Alim","mobile"=>"01710991692","address"=>"Borishal"],
	]
		print_r ($students);*/
		
		
		
/*<html>
<body>
<table border="1">
<tr>
<td>Name</td>
<td>Mobile</td>
<td>Address</td>
</tr>

$students=[
[ "name"=>"Abul Hossian", "mobile"=>"0172", "address"=>"Dhaka,Bangladesh"],
[ "name"=>"Abul Mannan", "mobile"=>"0182", "address"=>"Chittagong,Bangladesh"],
[ "name"=>"Abul Jahangir", "mobile"=>"0192", "address"=>"Noakhali,Bangladesh"],
[ "name"=>"Abul Malik", "mobile"=>"0162", "address"=>"Rajshahi,Bangladesh"],
[ "name"=>"Abul Kalek", "mobile"=>"0152", "address"=>"Kustia,Bangladesh"],
[ "name"=>"Abul mia", "mobile"=>"0142", "address"=>"Rungpur,Bangladesh"],
];
foreach ($students as $student) {
echo "<tr>";
foreach ($student as $val){
echo "<td>$val</td>"; 
}
echo "</tr>";
}

</table>
</body>
</html>

?>*/

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
];
$obj=new php85;
echo $obj->getTable($students);
?>








