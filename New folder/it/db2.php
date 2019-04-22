<?php
class DB2{
	private $conn;
	private $table;
	private $list;
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

	public function getTable($arrays,$edit_page="edit.php",$delete_page="",$insert_page="insert.php",$css_classes="table table-bordered table-hover table-stripped table-condensed"){
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
		$total_column=0;
			foreach ($arrays as $array) {
				
				$this->table.="<tr>";
					foreach ($array as $val){
						$total_column++;
						$this->table.= "<td>$val</td>"; 
					}
					$this->table.="<td><a class=\"btn btn-info glyphicon glyphicon-pencil\" href=\"$edit_page?id=$array[id]\"></a> &nbsp; <a class=\"btn btn-danger glyphicon glyphicon-remove\" href=\"$delete_page?id=$array[id]\"></a></td>";
				$this->table.= "</tr>";
			}
			$this->table.="<tr>";
				$this->table.="<td class=\"text-center\" colspan=\"$total_column\"><a href=\"$insert_page\" class=\"btn btn-primary\">Add New</a></td>";
			$this->table.="</tr>";
		$this->table.="</table>";
		return $this->table;
		//return $this;
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

	public function getList($array){
		$this->list="<ul style=\"list-style:none\">";
			foreach ($array as $list) {
				$this->list.="<li>$list[name]";
					$this->list.="<ul>";
						$this->list.="<li>";
						$this->list.="Mobile:$list[mobile]";
						$this->list.="</li>";
						$this->list.="<li>";
						$this->list.="Address:$list[address]";
						$this->list.="</li>";
					$this->list.="</ul>";
				$this->list.="</li>";
		
			}

		$this->list.="</ul>";
		return $this->list;
	}
public function Insert($table,$cols){
	$sql="INSERT INTO $table SET $cols";
	$result=$this->conn->query($sql);
	if($this->conn->affected_rows>0){
		return true;

	}
	else{
		return false;
	}
}

}

$connect=new DB2("localhost","root","","php85");

//$x=$connect->getAll("students","*");


//print_r($connect->getById("students","*","id=2"));
//echo $connect->getList($x);


