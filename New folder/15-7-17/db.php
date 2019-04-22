<?php

class DB{
	public $con;

	function __construct($servername,$user,$pass,$dbname)
	{
		$this->con=new mysqli($servername,$user,$pass,$dbname);

		//var_dump($this->con);
	
	}

	function row_count($query){

		$data=$this->con->query($query);

		$data=$data->fetch_all();
		
		echo "No of row found:". count($data);
	}

}

$db=new DB("localhost","root","","test");

echo $db->row_count("select * from book");