<?php

$age=35;
switch($age){
	
	case($age>0)&&($age<=15):
	echo "you are child";
	break;
	case($age>15)&&($age<=25):
	echo "you are young";
	break;
	case($age>25)&&($age<=40):
	echo "you are matured";
	break;
	default:
	echo "go away";
	break;
}


?>