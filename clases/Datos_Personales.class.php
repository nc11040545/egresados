<?php 
include("conexion.class.php");
class Datos_Personales{
	private $id;
	private $Nombre;
	private $Paterno;
	private $Materno;
	private $Control;
	private $Sexo;
	private $Telefono;
	private $Celular;
    private $Direccion;
	private $Ciudad;
	private $Estado;
	private $Carrera;
	private $Generacion;
	private $Correo;
	private $Redes;
	private $Compartir;
	private $status=true;

	public function getid(){return $this->id;}
	public function getNombre(){return $this->Nombre;}
	public function getPaterno(){return $this->Paterno;}
	public function getMaterno(){return $this->Materno;}
	public function getControl(){return $this->Control;}
	public function getSexo(){return $this->Sexo;}
	public function getTelefono(){return $this->Telefono;}
	public function getCelular(){return $this->Celular;}
	public function getDireccion(){return $this->Direccion;}
	public function getCiudad(){return $this->Ciudad;}
	public function getEstado(){return $this->Estado;}
	public function getCarrera(){return $this->Carrera;}
	public function getGeneracion(){return $this->Generacion;}
	public function getCorreo(){return $this->Correo;}
	public function getRedes(){return $this->Redes;}
	public function getCompartir(){return $this->Compartir;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function setNombre($Nombre){$this->Nombre = $Nombre;}
	public function setPaterno($Paterno){$this->Paterno = $Paterno;}
	public function setMaterno($Materno){$this->Materno = $Materno;}
	public function setControl($Control){$this->Control = $Control;}
	public function setSexo($Sexo){$this->Sexo = $Sexo;}
	public function setTelefono($Telefono){$this->Telefono = $Telefono;}
	public function setCelular($Celular){$this->Celular = $Celular;}
	public function setDireccion($Direccion){$this->Direccion = $Direccion;}
	public function setCiudad($Ciudad){$this->Ciudad = $Ciudad;}
	public function setEstado($Estado){$this->Estado = $Estado;}
	public function setCarrera($Carrera){$this->Carrera = $Carrera;}
	public function setGeneracion($Generacion){$this->Generacion = $Generacion;}
	public function setCorreo($Correo){$this->Correo = $Correo;}
	public function setRedes($Redes){$this->Redes = $Redes;}
	public function setCompartir($Compartir){$this->Compartir = $Compartir;}
	public function setstatus($status){$this->status = $status;}

public function altaDatos_Personales($id, $Nombre, $Paterno, $Materno, $Control, $Sexo, $Telefono, $Celular,  $Direccion, $Ciudad, $Estado, $Carrera, $Generacion, $Correo, $Redes, $Compartir){
		$conexion = new Conexion();
		$sql = "insert ignore into datos_personales(id, Nombre, Paterno,  Materno, Control, Sexo, Telefono, Celular, Direccion, Ciudad, Estado, Carrera, Generacion, Correo, Redes, Compartir)
		values('$id','$Nombre', '$Paterno', '$Materno', '$Control', '$Sexo', '$Telefono',' $Celular',  '$Direccion', '$Ciudad', '$Estado', '$Carrera', 'Generacion','$Correo', '$Redes','$Compartir')";
		$r = mysqli_query($conexion->link, $sql) or die(" Error ".mysqli_error($conexion->link));
		
		if (mysqli_affected_rows($conexion->link) == 1)
			return " si ";
		else
			return " no ";
	}
	public function bajaDatos($id){
		$conexion = new Conexion();
		$sql = "delete from datos_personales where id=$id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Datos borrados correctamente";
	}
	public function actualizaDatos_Personales(){
		$conexion = new Conexion();
		$sql = "update datos_Personales set Nombre='$this->Nombre', Paterno='$this->Paterno', Materno='$this->Materno', Control='$this->Control', Sexo='$this->Sexo', Telefono='$this->Telefono',
		Celular='$this->Celular', Direccion='$this->Direccion', Ciudad='$this->Ciudad', Estado='$this->Estado', Carrera='$this->Carrera' , Generacion='$this->Generacion', 
		Correo='$this->Correo', Redes='$this->Redes', Compartir='$this->Compartir' where id=$this->id";
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
	public static function buscaDatos($nombre){
		$conexion = new Conexion();
		$sql = "select *, id as id, Nombre as label from Datos_Personales where Nombre like '%$Nombre%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
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
