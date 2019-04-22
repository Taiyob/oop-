<?php
	$i = $_GET['init'];
	$N = $_GET['range'];
	for($i; $i<=$N; $i++){
		if($i==1){
                    echo "Jan<br>";
                }else if($i==2){
                    echo "Feb<br>";
                }else if($i==3){
                    echo "Mar<br>";
                }else if($i==4){
                    echo "Apr<br>";
                }else if($i==5){
                    echo "May<br>";
                }else if($i==6){
                    echo "Jun<br>";
                }else if($i==7){
                    echo "Jul<br>";
                }else if($i==8){
                    echo "Aug<br>";
                }else if($i==9){
                    echo "Sep<br>";
                }else if($i==10){
                    echo "Oct<br>";
                }else if($i==11){
                    echo "Nov<br>";
                }else if($i==12){
                    echo "Dec<br>";
                }else{
                    echo "Out of range";
                }
	}
?>