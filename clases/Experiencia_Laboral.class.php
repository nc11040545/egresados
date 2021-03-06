<?php 
include("conexion.class.php");
class Experiencia_Laboral{
	private $id;
	private $tiempo;
	private $trabajando;
	private $ejerciendo;
	private $trabajo;
	private $formal;
	private $negocio;
	private $telOficina;
	private $conocimiento;
	private $cursos;
	private $conferencias;
	private $apoyoServicio;
	private $apoyoResidentes;
	private $apoyoBolsa;
	private $status=true;

	public function getid(){return $this->id;}
	public function gettiempo(){return $this->tiempo;}
	public function gettrabajando(){return $this->trabajando;}
	public function getejerciendo(){return $this->ejerciendo;}
	public function gettrabajo(){return $this->trabajo;}
	public function getformal(){return $this->formal;}
	public function getnegocio(){return $this->negocio;}
	public function gettelOficina(){return $this->telOficina;}
	public function getconocimiento(){return $this->conocimiento;}
	public function getcursos(){return $this->cursos;}
	public function getconferencias(){return $this->conferencias;}
	public function getapoyoServicio(){return $this->apoyoServicio;}
	public function getapoyoResidentes(){return $this->apoyoResidentes;}
	public function getapoyoBolsa(){return $this->apoyoBolsa;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function settiempo($tiempo){$this->tiempo = $tiempo;}
	public function settrabajando($trabajando){$this->trabajando = $trabajando;}
	public function setejerciendo($ejerciendo){$this->ejerciendo = $ejerciendo;}
	public function settrabajo($trabajo){$this->trabajo = $trabajo;}
	public function setformal($formal){$this->formal = $formal;}
	public function setnegocios($negocio){$this->negocio = $negocio;}
	public function settelOficina($telOficina){$this->telOficina = $telOficina;}
	public function setconocimiento($conocimiento){$this->conocimiento = $conocimiento;}
	public function setcursos($cursos){$this->cursos = $cursos;}
	public function setconferencias($conferencias){$this->conferencias = $conferencias;}
	public function setapoyoServicio($apoyoServicio){$this->apoyoServicio = $apoyoServicio;}
	public function setapoyoResidentes($apoyoResidentes){$this->apoyoResidentes = $apoyoResidentes;}
	public function setapoyoBolsa($apoyoBolsa){$this->apoyoBolsa = $apoyoBolsa;}
	public function setstatus($status){$this->status = $status;}

    public function insertarExperiencia_Laboral($id, $tiempo, $trabajando, $ejerciendo, $trabajo, $formal, $negocio, $telOficina, $conocimiento, $cursos, $conferencias, $apoyoServicio, $apoyoResidentes, $apoyoBolsa){
	$conexion = new Conexion();
	$tiempo = mysqli_real_escape_string ($conexion->link,$tiempo);
	$trabajando = mysqli_real_escape_string ($conexion->link,$trabajando);
	$ejerciendo = mysqli_real_escape_string ($conexion->link,$ejerciendo);
	$trabajo = mysqli_real_escape_string ($conexion->link,$trabajo);
	$formal = mysqli_real_escape_string ($conexion->link,$formal);
	$negocio = mysqli_real_escape_string ($conexion->link,$negocio);
	$telOficina = mysqli_real_escape_string ($conexion->link,$telOficina);
	$conocimiento = mysqli_real_escape_string ($conexion->link,$conocimiento);
	$cursos = mysqli_real_escape_string ($conexion->link,$cursos);
	$conferencias = mysqli_real_escape_string ($conexion->link,$conferencias);
	$apoyoServicio = mysqli_real_escape_string ($conexion->link,$apoyoServicio);
	$apoyoResidentes = mysqli_real_escape_string ($conexion->link,$apoyoResidentes);
	$apoyoBolsa = mysqli_real_escape_string ($conexion->link,$apoyoBolsa);
	    
	    $sql = "insert into experiencia_laboral(id, tiempo, trabajando, ejerciendo, trabajo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyoServicio, apoyoResidentes, apoyoBolsa) 
		values('$tiempo', '$trabajando', '$ejerciendo', '$trabajo', '$formal', '$negocios', '$telOficina', '$conocimiento', '$cursos', '$conferencias', '$apoyoServicio','$apoyoResidentes'$apoyoBolsa)";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		
	}
	
	public function altaExperiencia_Laboral($id, $tiempo, $trabajando, $ejerciendo, $trabajo, $formal, $negocio, $telOficina, $conocimiento, $cursos, $conferencias, $apoyoServicio, $apoyoResidentes, $apoyoBolsa){
		$conexion = new Conexion();
		$sql = "insert ignore into experiencia_laboral(id, tiempo, trabajando, ejerciendo, trabajo, formal, negocio, telOficina, conocimiento, cursos, conferencias, apoyoServicio, apoyoResidentes, apoyoBolsa) 
		values('$id','$tiempo', '$trabajando', '$ejerciendo', '$trabajo', '$formal', '$negocio', '$telOficina', '$conocimiento', '$cursos', '$conferencias', '$apoyoServicio','$apoyoResidentes', '$apoyoBolsa')";
		$r = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		if (mysqli_affected_rows($conexion->link) > 0){
			echo "Experiencia laboral insertada correctamente";
		}else{
				return " No se pudo insertar correctamente ";
			}
	}
	
	public function actualizaExperiencia_Laboral(){
	$conexion = new Conexion();
	$tiempo = mysqli_real_escape_string ($conexion->link,$tiempo);
	$trabajando = mysqli_real_escape_string ($conexion->link,$trabajando);
	$ejerciendo = mysqli_real_escape_string ($conexion->link,$ejerciendo);
	$trabajo = mysqli_real_escape_string ($conexion->link,$trabajo);
	$formal = mysqli_real_escape_string ($conexion->link,$formal);
	$negocio = mysqli_real_escape_string ($conexion->link,$negocio);
	$telOficina = mysqli_real_escape_string ($conexion->link,$telOficina);
	$conocimiento = mysqli_real_escape_string ($conexion->link,$conocimiento);
	$cursos = mysqli_real_escape_string ($conexion->link,$cursos);
	$conferencias = mysqli_real_escape_string ($conexion->link,$conferencias);
	$apoyoServicio = mysqli_real_escape_string ($conexion->link,$apoyoServicio);
	$apoyoResidentes = mysqli_real_escape_string ($conexion->link,$apoyoResidentes);
	$apoyoBolsa = mysqli_real_escape_string ($conexion->link,$apoyoBolsa);
		
		$sql = "update experiencia_laboral set tiempo='$this->tiempo', trabajando='$this->trabajando', ejerciendo='$this->ejerciendo', 
		 trabajo='$this->trabajo',formal='$this->formal', negocio='$this->negocio', telOficina='$this->telOficina', conocimiento='$this->conocimiento', 
		 cursos='$this->cursos', conferencias='$this->conferencias', apoyoServicio='$this->apoyoServicio',
		 apoyoResidentes='$this->apoyoResidentes', apoyoBolsa='$this->apoyoBolsa' where id=$this->id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		 echo "Experiencia laboral actualizada correctamente";
	}
	
	
}
?>
