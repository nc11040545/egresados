<?php 
include("conexion.class.php");
class empleos_anteriores{
	private $id;
	private $empresa;
	private $puesto;
	private $anios_laborando;

	public function getid(){return $this->id;}
	public function getempresa(){return $this->empresa;}
	public function getpuesto(){return $this->puesto;}
	public function getanios_laborando(){return $this->anios_laborando;}
	public function setid($id){$this->id = $id;}
	public function setnombre($empresa){$this->empresa = $empresa;}
	public function setemail($puesto){$this->puesto = $puesto;}
    public function setanios_laborando($anios_laborando){$this->anios_laborando = $anios_laborando;}
    
	public function altaempleos_anteriores($id, $empresa, $puesto, $anios_laborando){
	$conexion = new Conexion();
	$empresa = mysqli_real_escape_string ($conexion->link,$empresa);
	$puesto = mysqli_real_escape_string ($conexion->link,$puesto);
	$anios_laborando = mysqli_real_escape_string ($conexion->link,$anios_laborando);
	
	
		
		$sql = "insert into empleos_anteriores(id_usuario, empresa, puesto, anios_laborando)values('$id','$empresa','$puesto','$anios_laborando')";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Empleo insertado correctamente";
	}
	
	
	public static function listaempleos_anteriores($id ){
		$conexion = new Conexion();
		$sql = "select * from empleos_anteriores  where id_usuario = $id";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
public function bajaEmpleo($id){
		$conexion = new Conexion();
		$sql = "delete from empleos_anteriores where id=$id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Empleo borrado correctamente";
	}
}
?>
