<?php 
include("conexion.class.php");
class Datos_Personales{
	private $id;
	private $Nombre;
	private $Paterno;
	private $Materno;
	private $Sexo;
	private $Telefono;
	private $Celular;
    private $Direccion;
	private $Ciudad;
	private $Estado;
	private $Carrera;
	private $Generacion;
	private $Redes;
	private $Compartir;
	private $status=true;

	public function getid(){return $this->id;}
	public function getNombre(){return $this->Nombre;}
	public function getPaterno(){return $this->Paterno;}
	public function getMaterno(){return $this->Materno;}
	public function getSexo(){return $this->Sexo;}
	public function getTelefono(){return $this->Telefono;}
	public function getCelular(){return $this->Celular;}
	public function getDireccion(){return $this->Direccion;}
	public function getCiudad(){return $this->Ciudad;}
	public function getEstado(){return $this->Estado;}
	public function getCarrera(){return $this->Carrera;}
	public function getGeneracion(){return $this->Generacion;}
	public function getRedes(){return $this->Redes;}
	public function getCompartir(){return $this->Compartir;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function setNombre($Nombre){$this->Nombre = $Nombre;}
	public function setPaterno($Paterno){$this->Paterno = $Paterno;}
	public function setMaterno($Materno){$this->Materno = $Materno;}
	public function setSexo($Sexo){$this->Sexo = $Sexo;}
	public function setTelefono($Telefono){$this->Telefono = $Telefono;}
	public function setCelular($Celular){$this->Celular = $Celular;}
	public function setDireccion($Direccion){$this->Direccion = $Direccion;}
	public function setCiudad($Ciudad){$this->Ciudad = $Ciudad;}
	public function setEstado($Estado){$this->Estado = $Estado;}
	public function setCarrera($Carrera){$this->Carrera = $Carrera;}
	public function setGeneracion($Generacion){$this->Generacion = $Generacion;}
	public function setRedes($Redes){$this->Redes = $Redes;}
	public function setCompartir($Compartir){$this->Compartir = $Compartir;}
	public function setstatus($status){$this->status = $status;}

public function altaDatos_Personales($id, $Nombre, $Paterno, $Materno, $Sexo, $Telefono, $Celular,  $Direccion, $Ciudad, $Estado, $Carrera, $Generacion, $Redes, $Compartir){
	$conexion = new Conexion();
	$Nombre = mysqli_real_escape_string ($conexion->link,$Nombre);
	$Paterno = mysqli_real_escape_string ($conexion->link,$Paterno);
	$Materno = mysqli_real_escape_string ($conexion->link,$Materno);
	$Sexo = mysqli_real_escape_string ($conexion->link,$Sexo);
	$Telefono = mysqli_real_escape_string ($conexion->link,$Telefono);
	$Celular = mysqli_real_escape_string ($conexion->link,$Celular);
	$Direccion = mysqli_real_escape_string ($conexion->link,$Direccion);
	$Ciudad = mysqli_real_escape_string ($conexion->link,$Ciudad);
	$Estado = mysqli_real_escape_string ($conexion->link,$Estado);
	$Carrera = mysqli_real_escape_string ($conexion->link,$Carrera);
	$Generacion = mysqli_real_escape_string ($conexion->link,$Generacion);
	$Redes = mysqli_real_escape_string ($conexion->link,$Redes);
	$Compartir = mysqli_real_escape_string ($conexion->link,$Compartir);
		
	    $sql = "insert ignore into datos_personales(id, Nombre, Paterno,  Materno, Sexo, Telefono, Celular, Direccion, Ciudad, Estado, Carrera, Generacion, Redes, Compartir)
		values('$id','$Nombre', '$Paterno', '$Materno', '$Sexo', '$Telefono',' $Celular',  '$Direccion', '$Ciudad', '$Estado', '$Carrera', '$Generacion', '$Redes','$Compartir')";
		$r = mysqli_query($conexion->link, $sql) or die(" Error ".mysqli_error($conexion->link));
		
		if (mysqli_affected_rows($conexion->link) == 1)
			echo"Datos agregados correctamente ";
		else
			return "Los datos no se agregaron correctamente ";
	}
	public function bajaDatos($id){
		$conexion = new Conexion();
		$sql = "delete from datos_personales where id=$id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Datos borrados correctamente";
	}
	public function actualizaDatos_Personales(){
	$conexion = new Conexion();
	$this->Nombre = mysqli_real_escape_string ($conexion->link,$this->Nombre);
	$this->Paterno = mysqli_real_escape_string ($conexion->link,$this->Paterno);
	$this->Materno = mysqli_real_escape_string ($conexion->link,$this->Materno);
	$this->Sexo = mysqli_real_escape_string ($conexion->link,$this->Sexo);
	$this->Telefono = mysqli_real_escape_string ($conexion->link,$this->Telefono);
	$this->Celular = mysqli_real_escape_string ($conexion->link,$this->Celular);
	$this->Direccion = mysqli_real_escape_string ($conexion->link,$this->Direccion);
	$this->Ciudad = mysqli_real_escape_string ($conexion->link,$this->Ciudad);
	$this->Estado = mysqli_real_escape_string ($conexion->link,$this->Estado);
	$this->Carrera = mysqli_real_escape_string($conexion->link,$this->Carrera);
	$this->Generacion = mysqli_real_escape_string ($conexion->link,$this->Generacion);
	$this->Redes = mysqli_real_escape_string ($conexion->link,$this->Redes);
	$this->Compartir = mysqli_real_escape_string ($conexion->link,$this->Compartir);
		
		$sql = "update datos_Personales set Nombre='$this->Nombre', Paterno='$this->Paterno', Materno='$this->Materno', Sexo='$this->Sexo', Telefono='$this->Telefono',
		Celular='$this->Celular', Direccion='$this->Direccion', Ciudad='$this->Ciudad', Estado='$this->Estado', Carrera='$this->Carrera' , Generacion='$this->Generacion', 
		Redes='$this->Redes', Compartir='$this->Compartir' where id=$this->id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Datos actualizados correctamente";
	}
	public static function buscaDato($id){
		$conexion = new Conexion();
		$sql = "select * from Datos_Personales where id=$id";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function buscaDatos($nombre, $servicio="%%", $residencia="%%", $bolsa="%%"){
		$conexion = new Conexion();
		$ands = " 0 ";
		if ($servicio == "SI")
		{
			$ands .= " or apoyoServicio ='SI' ";
			}
		if ($residencia == 'SI'){
			$ands .= "  or apoyoResidentes = 'SI' ";
			}
		if ($bolsa == 'SI'){
			$ands .= " or apoyoBolsa = 'SI' ";
			}
		
		$sql = "select *, experiencia_laboral.id as id, Nombre as label from 
				Datos_Personales, (select * from experiencia_laboral where $ands) experiencia_laboral where experiencia_laboral.id = Datos_Personales.id and Nombre like '%$nombre%' 
				"; 
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		$regs=Array();
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function listaDatos(){
		$conexion = new Conexion();
		$sql = "select * from Datos_Personales";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}

}
?>
