<?php
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

	public function getTable($arrays,$css_classes="table table-bordered table-hover table-stripped table-condensed"){
		if(count($arrays) == count($arrays, 1)){
			//echo "Single Array";
			$this->table="<table border=\"1\" cellpadding=\"5\" class=\"$css_classes\">";
			foreach($arrays as $column=>$value){
				$this->table.="<tr>";
					$this->table.="<th class=\"text-right\">".ucfirst($column)."</th>";
					$this->table.="<td>$value</td>";
				$this->table.="</tr>";

			}

			$this->table.="</table>";
			return $this->table;
		}
		else{
		$this->table="<table border=\"1\" cellpadding=\"5\" class=\"$css_classes\">";
		$this->table.="<tr>";
			foreach($arrays[0] as $k=>$v){
				$this->table.="<th>".ucfirst($k)."</th>";
			}
			$this->table.="<th>Action</th>";
		$this->table.="</tr>";
			foreach ($arrays as $array) {
				$this->table.="<tr>";
					foreach ($array as $val){
						$this->table.= "<td>$val</td>"; 
					}
					$this->table.="<td><a class=\"btn btn-info glyphicon glyphicon-pencil\" href=\"edit.php?id=$array[id]\"></a> &nbsp; <a class=\"btn btn-danger glyphicon glyphicon-remove\" href=\"delete.php?id=$array[id]\"></a></td>";
				$this->table.= "</tr>";
			}

		$this->table.="</table>";
		return $this->table;
	}

}

	public function getById($table,$cols,$condition){
		$sql="SELECT $cols FROM $table WHERE $condition";
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			return $result->fetch_assoc();
		}
		else{
			return false;
		}



	}


}

$connect=new DB2("localhost","root","","php85");
/*echo "<pre>";
print_r($connect->getAll("students","*"));
echo "</pre>";*/

//print_r($connect->getById("students","*","id=2"));


