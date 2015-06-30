<?php 
include("conexion.class.php");
class Experiencia_Laboral{
	private $id;
	private $tiempo;
	private $trabajando;
	private $ejerciendo;
	private $formal;
	private $negocio;
	private $telOficina;
	private $conocimiento;
	private $cursos;
	private $conferencias;
	private $apoyo;
	private $status=true;

	public function getid(){return $this->id;}
	public function gettiempo(){return $this->tiempo;}
	public function gettrabajando(){return $this->trabajando;}
	public function getejerciendo(){return $this->ejerciendo;}
	public function getformal(){return $this->formal;}
	public function getnegocio(){return $this->negocio;}
	public function gettelOficina(){return $this->telOficina;}
	public function getconocimiento(){return $this->conocimiento;}
	public function getcursos(){return $this->cursos;}
	public function getconferencias(){return $this->conferencias;}
	public function getapoyo(){return $this->apoyo;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function settiempo($tiempo){$this->tiempo = $tiempo;}
	public function settrabajando($trabajando){$this->trabajando = $trabajando;}
	public function setejerciendo($ejerciendo){$this->ejerciendo = $ejerciendo;}
	public function setformal($formal){$this->formal = $formal;}
	public function setnegocios($negocio){$this->negocio = $negocio;}
	public function settelOficina($telOficina){$this->telOficina = $telOficina;}
	public function setconocimiento($conocimiento){$this->conocimiento = $conocimiento;}
	public function setcursos($cursos){$this->cursos = $cursos;}
	public function setconferencias($conferencias){$this->conferencias = $conferencias;}
	public function setapoyo($apoyo){$this->apoyo = $apoyo;}
	public function setstatus($status){$this->status = $status;}

    public function insertarExperiencia_Laboral($id, $tiempo, $trabajando, $ejerciendo, $formal, $negocio, $telOficina, $conocimiento, $cursos, $conferencias, $apoyo){
	    $conexion = new Conexion();
	    $sql = "insert into experiencia_laboral(id, tiempo, trabajando, ejerciendo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyo) 
		values('$tiempo', '$trabajando', '$ejerciendo', '$sector', '$formal', '$negocios', '$telOficina', '$conocimiento', '$cursos', '$conferencias', '$apoyo')";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Experiencia laboral insertada correctamente";
	}
	
	public function altaExperiencia_Laboral($id, $tiempo, $trabajando, $ejerciendo, $formal, $negocio, $telOficina, $conocimiento, $cursos, $conferencias, $apoyo){
		$conexion = new Conexion();
		$sql = "insert into experiencia_laboral(id, tiempo, trabajando, ejerciendo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyo) 
		values('$id','$tiempo', '$trabajando', '$ejerciendo', '$formal', '$negocio', '$telOficina', '$conocimiento', '$cursos', '$conferencias', '$apoyo')";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Experiencia laboral insertada correctamente";
	}
	
	public function actualizaExperiencia_Laboral($id, $tiempo, $trabajando, $ejerciendo, $formal, $negocio, $telOficina, $conocimiento, $cursos, $conferencias, $apoyo){
		$conexion = new Conexion();
		$sql = "update experiencia_laboral set tiempo='$this->tiempo', trabajando='$this->trabajando', ejerciendo='$this->ejerciendo', 
		 formal='$this->formal', negocio='$this->negocio', telOficina='$this->telOficina', conocimiento='$this->conocimiento', cursos='$this->cursos', conferencias='$this->conferencias', apoyo='$this->apoyo''where id=$this->id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Experiencia laboral actualizada correctamente";
	}
	
	
}
?>
