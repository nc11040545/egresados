<?php 
class Conexion{
	private $host = "localhost";
	private $user = "root";
	private $database = "RESIDENCIA";
	private $password = "";
	public $link;
	//grant all on biblio.* to biblio@localhost identified by "unacontrasena";
	public function Conexion(){
		$this->link = mysqli_connect($this->gethost(),
									$this->getuser(),
									$this->getpassword(),
									$this->getdatabase());
		mysqli_set_charset($this->link, "utf8");
	}


public function gethost(){return $this->host;}
public function getuser(){return $this->user;}
public function getdatabase(){return $this->database;}
public function getpassword(){return $this->password;}
}
?>
