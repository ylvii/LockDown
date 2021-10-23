<?php

class User {
	public $login = "";
	public $pass;

	public function auth($login){
		echo $this->login = $login;
		echo $this->pass;
	}
}

$user = new User();
var_dump($user);
$user->auth("login11111");
echo"<br>".$user->login."<br>";
var_dump($user);

$user = new User();
var_dump($user1);


?>

<?php
class DB{
	public $username = "root";
	public $pass = "";
	public $hostname = "localhost";
	public $datebase = "registracAlex";
	public $mysql;
	public $tableName = "registr";

	public function __construct(){
		$this->mysql = new mysqli($this->hostname , $this->username , $this->pass , $this->datebase);
	}

	public function getAllRecords(){
		$result=$this->mysql->query("SELECT * FROM $this->tableName");
		#$result=$result->fetch_all();
		return $result;
	}

	public function getRowById(){
		$this->mysql->query("INSERT INTO '$this->tableName' ('login', 'pass', 'name')
			VALUES('$login', '$pass', '$name')");
		$mysql->close();
	}
}

$user = new DB();
$data = $user->getAllRecords('registr');
print_r($data);

class base extends DB{
	public $tableName = "nasledstvie";
	}

$user = new base();
$data = $user->getAllRecords('nasledstvie');
echo "<br>";
print_r($data);


?>