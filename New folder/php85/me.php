<?php

	$a=[[[[2=>[[['Hellow']]]]]]];
	echo $a[0][0][0][2][0][0][0];
	//echo '';
	echo '<br>';
	
	$b=[[2]];
	echo $b [0][0];
	echo '<br>';
	
	$c=[3=>[2=>[1=>[5]]]];
	echo $c[3][2][1][0];
	echo '<br>';
	
	
	
	
	$x=['a'=>'america','b'=>'Bangladesh','c'=>'Canada'];
	
	
	

?>
<html>

	<body>
	
		<table border='1'>
			<?php
				$x=['a'=>'america','b'=>'Bangladesh','c'=>'Canada'];
				foreach($x as $val){
					echo '<tr>';
					echo "<td> $val </td>";
					echo '</tr>';
				}
			?>
		
		</table>
	</body>
</html>

<html>

	<body>
	
		<table border='1'>
		<tr>
			<?php
				$student=['a','b','c'];
				foreach($student as $val){
					
					echo "<td> $val </td>";
					
				}
			?>
		</tr>
		</table>
	</body>
</html>



<html>

	<body>
	
		<table border='1'>
			<tr>
				<td>Name</td>
				<td>Address</td>
			</tr>
			<?php
				$students=[
							["name"=>"Habib","address"=>"Dhaka"],
							["name"=>"Razib", "address"=>"Newkhali"],
							["name"=>"Chandan", "address"=>"Pabna"],
							["name"=>"Mridul","address"=>"Comilla"],
							];
				foreach($students as $val){
					
					echo "<tr>";
						foreach ($val as $val1){
							echo "<td>$val1</td>";
						}
					echo "</tr>";		
				}
			?>
		
		</table>
	</body>
</html>




