<?php 
include ("conexion.class.php");
class Admin{
	private $usuario;
	private $contrasena;
	private $status=true;
	public function getusuario(){return $this->usuario;}
	public function getcontrasena(){return $this->contrasena;}
	public function getstatus(){return $this->status;}
	public function setusuario($usuario){$this->usuario = $usuario;}
	public function setcontrasena($contrasena){$this->contrasena = $contrasena;}
	public function setstatus($status){$this->status = $status;}
	
	public static function buscaRegistros($usuario){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario like '%$usuario%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function buscaRegistro($contrasena){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario like '%$contrasena%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public function validarAdmin(){
		$conexion = new Conexion();
		$sql = "select count(*) total from index_admin where usuario='$this->usuario' and contrasena='$this->contrasena'";
		$q = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		$r = mysqli_fetch_assoc($q);
		if ($r["total"] > 0){
			echo "--si--";
		}else{
			echo "---no---";
			}
	}
}
?>
