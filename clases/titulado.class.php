<?php 
include("conexion.class.php");
class titulado{
	private $id;
	private $situacion;
	private $motivo;
	private $status=true;

	public function getid(){return $this->id;}
	public function getsituacion(){return $this->situacion;}
	public function getmotivo(){return $this->motivo;}
	public function getf_salida(){return $this->f_salida;}
	public function getf_entrega(){return $this->f_entrega;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function setsituacion($situacion){$this->situacion = $situacion;}
	public function setmotivo($motivo){$this->motivo = $motivo;}
	public function setstatus($status){$this->status = $status;}


	
    public function altatitulado($id, $situacion, $motivo){
	    $conexion = new Conexion();
	    $sql = "insert into titulado(id, situacion, motivo) 
		values('$id', '$situacion', '$motivo')";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Titulado insertado correctamente";
	}
	
	public function bajatitulado($id){
		$conexion = new Conexion();
		$sql = "delete from titulado where id =".$id;
		mysqli_query($conexion->link, $sql) 
				or die("Ocurrió un error: ".mysqli_error($conexion->link));
		mysqli_close($conexion->link);
		return "El motivo se ha borrado";
	}
	public function actualizatitulado(){
		$conexion = new Conexion();
		$sql = "update motivo set motivo= '$this->motivo' where 
				id=$this->id";
		mysqli_query($conexion->link, $sql) 
				or die("Ocurrió un error: ".mysqli_error($conexion->link));
		mysqli_close($conexion->link);
		return "El motivo se ha actualizado";
	}
}
?>
