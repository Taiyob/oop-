<?php
// class php85{
// private $table;
// public function getTable($students){
// $this->table="<table border=\"1\" cellpadding=\"5\">";
	// $this->table.="<tr>";
		// foreach($students[0] as $k=>$v){
		// $this->table.="<td>".ucfirst($k)."</td>";
		// }
	// $this->table.="</tr>";
	
	// foreach ($students as $student) {
		// $this->table.="<tr>";
		// foreach ($student as $val){
			// $this->table.= "<td>$val</td>"; 
			// }
		// $this->table.= "</tr>";
// }
// $this->table.="</table>";
// return $this->table;
// }
// }
// $students=[
		// ["name"=>"Masud","mobile"=>"01854138817","address"=>"Dhaka"],
		// ["name"=>"Rasel","mob"=>"01854138817","address"=>"Khulna"],
		// ["name"=>"Harun","mob"=>"01854138817","address"=>"Comilla"],
	// ];	

// $obj=new php85;
// echo $obj->getTable($students);


class Db{
		private $conn;
		public function __construct($host,$user,$pass,$db){
			$this->conn = new mysqli ($host,$user,$pass,$db);
			
				if($this->conn->connect_errno){
					die("connection fail");
				}	
			}
			public function getAll($table,$cols){
			$sql="SELECT $cols FROM $table";
			//echo $sql;
			$result= $this->conn->query($sql);
			if ($result->num_rows>0){
				//print_r($result->fetch_all(MYSQLI_ASSOC));
				return $result->fetch_all(MYSQLI_ASSOC);
			}
		}
		
	}
	$db = new Db("localhost","root","","php85");
	//echo "<pre>";
	$students = $db->getAll("students","*");
	echo $db->getTable($students);
	//echo "</pre>";




















?>