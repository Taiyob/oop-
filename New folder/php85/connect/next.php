<?php


class DB{
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
$connect=new DB("localhost","root","","php85");
//print_r($connect->getAll("students","*"));
$students=$connect->getAll("students","*");
echo $connect->getTable($students);

 ?> 














