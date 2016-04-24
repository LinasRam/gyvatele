<?php

class savescore {

private $score;
private $name;
private $lastID;
	public function __construct($n,$s){
	$this->name = $n;
	$this->score = $s;
	}
	public function save(){

		
			$connect = mysql_connect("localhost","root","") or die("No connection");
			mysql_select_db("snake") or die("no db");

			$sql="INSERT INTO scores (name,score) values ('$this->name' , '$this->score')";
			$result = mysql_query($sql);
			$x = mysql_insert_id();
			$this->lastID= $x;
			mysql_close ($connect);

	}
	public function getlastName(){
			
			$connect = mysql_connect("localhost","root","") or die("No connection");
			mysql_select_db("snake") or die("no db");

		$sql = "select name,score from scores where ID='$this->lastID'";
		$result = mysql_query($sql);
		$a = mysql_fetch_assoc($result);
		$n = $a['name'];
		mysql_close ($connect);
		return $n;

	}
		public function getlastScore(){
		$connect = mysql_connect("localhost","root","") or die("No connection");
		mysql_select_db("snake") or die("no db");

		$sql = "select name,score from scores where ID='$this->lastID'";
		$result = mysql_query($sql);
		$a = mysql_fetch_assoc($result);
		$s =	intval($a['score']);
		mysql_close ($connect);
		return $s;
	}
}



if($_GET){
	$save = new Savescore($_GET['name'], $_GET['score']);
	$save->save();

	
}

//die();
header("Location: index.php");

?>

