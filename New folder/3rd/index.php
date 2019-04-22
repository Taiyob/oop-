<?php
// soman ki na dekhar jonno, true=1, false=0
	$a=5;
	$b=7;
	echo $a==5;
	echo "<br>";
	
	//turnary operation
	$a=5;
	$b=7;
	echo $a==5?"Three":"Not Three";
	echo "<br>";
	
	
	//not equal ..... a er maaan ki b er soman noi??
	//true or false
	$a=5;
	$b=7;
	echo $a!=$b;
	echo "<br>";
	//not equal
	$a=5;
	$b=7;
	echo $a!=$b?"Those not same":"Same";
	echo "<br>";
	//soman ki na
	$a=5;
	$b="5";
	echo $a==$b;
	echo $a===$b;//type o check kore eta
	echo "<br>";
	$a=5;
	$b="5";
	//echo $a==$b;
	echo $a!==$b;
	echo "<br>";
	
	
	$a=5;
	$b=7;
	echo $b<10;
	echo "<br>";
											//<>,!= same
	$a=5;
	$b=7;
	echo $a<=$b;
	echo $a<=5;
	echo "<br>";
	
	
	//logical operator
	//AND:2dai true hoile true
	//OR:je kono 1ta true hoile true
	//XOR:1ta sotto 1ta mitta hoile true hobe, jodi 2tai true hoi ba 2tai false hoi tahole false hobe;
	$a=5;
	echo $a>10||$a<7;
	echo "<br>";
	
	//increment
	$a=5;
	echo $a++;//post increment
	echo "<br>";
	echo $a;
	echo "<br>";
	
	
	
	//conditional statement
	$age=35;
	if($age>255 && $age<=440){
		echo"I am young";
	}
	else{
		echo "I am not old man";
	}
	echo "<br>";
	
	
	
	$age=25;
	if($age>0&&$age<=15){
		echo "You are child";
	}
	elseif($age>15&&$age<=25){
		echo"You are young";
	}
	elseif($age>25&&$age<=40){
		echo "You are adult";
	}
	else{
		echo "You are old man";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


?>