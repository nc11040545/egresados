<?php 
include ("conexion.class.php");
class registro{
	private $id;
	private $usuario;
	private $password;
	private $status=true;

	public function getid(){return $this->id;}
	public function getusuario(){return $this->usuario;}
	public function getpassword(){return $this->password;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function setusuario($usuario){$this->usuario = $usuario;}
	public function setpassword($password){$this->password = $password;}
	public function setstatus($status){$this->status = $status;}
	
	public static function buscaRegistros($usuario){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario like '%$usuario%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function buscaRegistros($password){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario like '%$password%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public function validarRegistro(){
		$conexion = new Conexion();
		$sql = "select usuario set usuario='$this->usuario', password='$this->password' where id=$this->id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Usuario validado correctamente";
	}
?>
