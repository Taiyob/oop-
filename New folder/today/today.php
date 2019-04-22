<?php
	class getSet{
		public $a;
		public function get(){
			return $this->a;
		}
	}
	$obj=new getSet;
	$obj->a="Hellow";
	echo $obj->get();
?>
<?php
	//class getSet{
	//	private $a;
	//	public function get(){
	//		return $this->a;
	//	}
	//}
	//$obj=new getSet;
	//$obj->a="Hellow";
	//echo $obj->get();
?>
<?php
	class getSet1{
		private $a;
		public  function set($v){
			$this->a=$v;
		}
		public function get(){
			return $this->a;
		}
	}
	$obj=new getSet1;
	$obj->set("Hi");
	echo $obj->get();
	
?>
<?php
	class Mathmetics{
		public function sum($n1,$n2){
			return $n1+$n2;
		}
	}
	$obj=new Mathmetics;
	echo $obj->sum(5,7);
?>
<?php
	class Member{
		public $username;
		private $loggedIn=false;
		public function login(){
			$this->loggedIn=true;
		}
		public function isloggedIn(){
			if($this->loggedIn){
				return $this->username."is Logged In";
			}
			else{
				return $this->username."is LoggedOut";
			}
		}
		public function logout(){
			$this->loggedIn=false;
		}
	}
	$x=new Member;
	$x->username="Razib";
	//echo $x->isloggedIn();
	//$x->login();
	//echo $x->isloggedIn();
	$x->logout();
	echo $x->isloggedIn();
	echo "<br>";
?>
<?php
	class B{
		public function sayHellow(){
			echo "Hi<br>";
		}
		public function __destruct(){
			echo "Bye Bye<br>";
		}
		public function __construct (){
			echo "Welcome<br>";
		}
	}
	$obj=new B;
	$obj->sayHellow();
?>











