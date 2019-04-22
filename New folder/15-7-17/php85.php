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

