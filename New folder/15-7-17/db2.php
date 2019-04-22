<?php
include("php85.php");
class DB2{
	private $conn;
	private $table;
	public function __construct($host,$user,$pass,$db){
		$this->conn=new mysqli($host,$user,$pass,$db);
		if($this->conn->connect_errno){
			die("Connection Fail!");
		}

	}
	public function getAll($table,$cols){
		$sql="SELECT $cols FROM $table";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		else{
			return false;
		}

	}
}

$connect=new DB2("localhost","root","","php85");
//print_r($connect->getAll("students","*"));
$students=$connect->getAll("students","*");
$obj=new php85;

echo $obj->getTable($students);

