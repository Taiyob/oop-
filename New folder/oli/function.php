<?php

	function range2($start , $end){
		for ($i=$start; $i<=$end; $i++){
			echo $i, '<br>';
		}
	}
	range2(3,13);
	echo '<br>';
	function oddEven($num){
		if($num%2==0){
			echo '$num is even';
		}
		else{
			echo '$num is odd';
		}
	}
	echo oddEven(8);
	echo '<br>';

	//array numerical
	$array1=['a','b','d','k'];
	print_r($array1);
	
	$array1=['a','b','d','k'];
	echo '<pre>';
	print_r($array1);
	echo '</pre>';
	echo '<br>';
	$x=['America',5,5.7,true];
	echo '<pre>';
	var_dump ($x);
	echo '</pre>';
	
	echo '<br>';
	
	$y=['a','b','d','k'];
	echo $y[2];
	echo '<br>';
	for ($i=0;$i<4;$i++){
		echo $y[$i],'<br>';
	}
	
	$z=['a','b','d','k'];
	foreach($z as $v){
		echo $v,'<br>';
	}
	echo '<br>';
	$b=['a',7=>10,'b','c'];
	echo '<pre>';
	print_r($b);
	echo '</pre>';
	
	echo '<br>';
	$b=[5=>10,'b','c'];
	echo '<pre>';
	print_r($b);
	echo '</pre>';
	
	echo '<br>';
	$j=['a',5=>'b',1=>'c','g'];
	echo '<pre>';
	print_r($j);
	echo '</pre>';
	
	//associative
	
	$m=['a'=>'America','b'=>'Bangladesh','c'=>'Canada','d'=>'Denmark'];
	foreach ($m as $k=>$v){
		echo $k;
	}
	echo '<br>';
	$m=['a'=>'America','b'=>'Bangladesh','c'=>'Canada','d'=>'Denmark'];
	foreach ($m as $k=>$v){
		echo $k,'=>',$v;
	}
	echo '<br>';
	$m=['a'=>'America','b'=>'Bangladesh','c'=>'Canada','d'=>'Denmark'];
	foreach ($m as $k=>$v){
		echo $v;
	}
	echo '<br>';
	$m=['a'=>'America','b'=>'Bangladesh','4'=>'Canada','d'=>'Denmark'];
	foreach ($m as $k=>$v){
		echo $k,'=>',$v,'<br>';
	}
	
	//nested array
	echo '<br>';
	$a=['a','b'=>['c','d']];
	echo $a [0];
	echo $a ['b']['0'];
	echo '<br>';
	$p=[[5,7],[8,9,10],[11,12,13]];
	
	echo $p [1][2];
	echo '<br>';
	echo $p [2][2];
	echo '<br>';
	echo $p [0][1];
	echo '<br>';
	print_r($p[1]);
	echo '<br>';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>