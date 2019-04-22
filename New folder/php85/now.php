<?php

class Db{
	private $conn;
	public function __construct($host,$user,$pass,$db){
		//echo "Hellow Constructor";
		//echo $x;
		$this->conn=new mysqli($host,$user,$pass,$db);
		{
			if($this->conn->connect_errno){
				die("connection fail");
			}
			else{
				
				die("connection succesfully");
			}
		}
	}
}
$db=new Db("localhost","root","","php85");



?>