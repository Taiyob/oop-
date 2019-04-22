
<?php include_once'.connect_db.php';?>
<?php
//varriable= lekhar system: 
// $a[0]="A"value;
// $varriable a[1]="B";
// $a[2]="C";
// $a[3index,key]="D";
//$a=array();.. eta besi use korbo
// array type: 0 theke soro hoye serial hoye seta . index,  0 theke soro na hole associate, seta 1 theke soro hole o,  
//$a[0]=array(a,b).. multidimentional


//loop= for,whilw,dowhile,foreach



//index
$book= array("C","C++","PHP","JAVA","Andriod","Wordpress");
echo '<pre>';
print_r($book);

echo $book[2];
foreach ($book as $value_book){
	echo $value_book . ',';
}
echo'<br>';
foreach ($book as $key=>$value){
	echo $key . ',';
}




//associate
$book= array('1'=>'C','22'=>'C++','39'=>'PHP','9'=>'Wordpress','11'=>'Java','100'=>'Andriod');
echo '<pre>';
print_r($book);

foreach ($book as $value_book){
	echo $value_book . ',';
}
echo'<br>';
foreach ($book as $key=>$value){
	echo $key . ',';
}

//multidimentional

$book = array('1'=>'C','22'=>'C++','39'=>array('php 5','php 5.6','php 5.9','php 7'),
		'9'=>'Wordpress','11'=>'Java','100'=>array('Andriod lolipop','Andriod mashmelo'));

echo '<pre>';
print_r($book);
print_r($book['39']);
//print_r($book['39']['php 5']);



//php function...... user define function
//keyword-function, name-abc, 
//function abc(){}
//function writeMsg(){
//	echo 'oi beda';
//}
//writeMsg();
function writeMsg1(){
	$a = 'me';
	echo $a;
}
writeMsg1();
function writeMsg(){
	$a = 'me<br>';
	return $a;
}
echo writeMsg().'and u';

function writeMsg2(){
	$a = 'me<br>';
	return true;
}
echo writeMsg2().'and u';


//argument
echo '<br>';
function addTwoNumber($first_number,$second_number){
	$result = $first_number+$second_number;
	return $result;
}
echo addTwoNumber(5,6);
echo '<br>';
echo addTwoNumber(55,6555);



echo '<br>';
function calculateNumber($first_number,$second_number,$calc){
	if ($calc=='+'){
		$result1= $first_number+$second_number;
	} elseif($calc=='-'){
		$result1= $first_number-$second_number;
	}elseif ($calc=='*'){
		$result1= $first_number*$second_number;
	}elseif ($calc=='/'){
		$result1= $first_number/$second_number;
	}
	
	return $result1;
	
}
echo calculateNumber (25,5,'+');
//echo addTwoNumber(5,6);
echo '<br>';
//echo addTwoNumber(55,6555);

echo '<br>';
function calculateNumber1($first_number=25,$second_number=5,$calc='+'){
	if ($calc=='+'){
		$result1= $first_number+$second_number;
	} elseif($calc=='-'){
		$result1= $first_number-$second_number;
	}elseif ($calc=='*'){
		$result1= $first_number*$second_number;
	}elseif ($calc=='/'){
		$result1= $first_number/$second_number;
	}
	
	return $result1;
	
}
echo calculateNumber1 ();
echo '<br>';
// url theke- ? num= ........
$sum=$_GET['num'];
//echo $sum;
function oddEven($num){
	$num1=$num%2;
	if($num1==0){
		return 'Even';
	}else{
		return 'odd';
	}
}
echo oddEven($sum);

//mail function
//mail(to,subject,msg);
$to='oli@gmail.com';
$subject="Test PHP email";
$messasge='Hi kemon aso';
$header='Reply-to:abc@gmail.com';
mail($to,$subject,$messasge,$header);
?>

<html>
	<head>form marking</head>
	<form action='' method='post' enctype='multipart/form-data'>
		<lebel>Name:<input type='text' name='f_name'/></lebel><br>
		<lebel>Email:<input type='email' name='your_email'/></lebel><br>
		<lebel>Pasword:<input type='password' name='set_password'/></lebel><br>
		<lebel>Teaxtarea:<textarea name='your_address'></textarea></lebel><br>
		<lebel>Mobile:<input type='tel' name='your_mobile'/></lebel><br>
		<lebel>Upload your Image:<input type='file' name='profile_image'/></lebel><br>
		<input type='submit' value='submit'/>
		
		<?php
			if(!empty($_POST)){
				if(!empty($_POST['your_mail'])){
					$var=filter_var($POST['your_mail'],FILTER_VALIDATE_EMAIL);	
					if($var){
						echo '<span>correct email</span>';
					}
					else{
						echo 'wrong';
					}
				}
				if(!empty($_FILES)){
						$dir_location='./uploads/'.strtotime(date('Y-m-d H:i:s')).'_'.$_FILES['profile_image']['name'];
						$if_uploaded=move_uploaded_file($_FILES['profile_image']['tmp_name'],$dir_location);
					//var_dump($if_uploaded);
						//exit;
						if($if_uploaded){
							echo 'upload';
						}else{
							echo 'Not uploaded';
						}
					}
			
		?>
		
		
		<p>
			<strong>your name:</strong><?php echo $_POST['f_name']?><br>
			<strong>your email:</strong><?php echo $_POST['your_email']?><br>
			<strong>your password:</strong><?php echo $_POST['set_password']?><br>
			<strong>your address:</strong><?php echo $_POST['your_address']?><br>
			<strong>your phone:</strong><?php echo $_POST['your_mobile']?><br>
		</p>
		
		<?php  } ?>
</html>


		<?php
				
		
		
		?>















































































































































?>