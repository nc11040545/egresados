<?php 
include ("conexion.class.php");
class registro{
	private $id;
	private $usuario;
	private $password;
	private $cpassword;
	private $correo;
	private $status=true;

	public function getid(){return $this->id;}
	public function getusuario(){return $this->usuario;}
	public function getpassword(){return $this->password;}
	public function getcpassword(){return $this->cpassword;}
	public function getcorreo(){return $this->correo;}
	public function getstatus(){return $this->status;}
	public function setid($id){$this->id = $id;}
	public function setusuario($usuario){$this->usuario = $usuario;}
	public function setpassword($password){$this->password = $password;}
	public function setcpassword($cpassword){$this->cpassword = $cpassword;}
	public function setcorreo($correo){$this->correo = $correo;}
	public function setstatus($status){$this->status = $status;}

	public function altaRegistro($usuario, $password, $cpassword, $correo){
		$conexion = new Conexion();
		$sql = "insert into registro( usuario, password, cpassword, correo)values('$usuario','$password', '$cpassword', '$correo')";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "registro creado correctamente";
	}
	public function bajaRegistro($id){
		$conexion = new Conexion();
		$sql = "delete from registro where id=$id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "registro borrado correctamente";
	}
	public function actualizaRegistro(){
		$conexion = new Conexion();
		$sql = "update usuario set usuario='$this->usuario', password='$this->password', cpassword='$this->cpassword', correo='$this->correo' where id=$this->id";
		mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		echo "Usuario actualizado correctamente";
	}
	public static function buscaRegistro($id){
		$conexion = new Conexion();
		$sql = "select * from registro where id=$id";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function buscaRegistros($usuario){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario like '%$usuario%'";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
	}
	public static function listaRegistro(){
		$conexion = new Conexion();
		$sql = "select * from registro";
		$query = mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		while ($reg = mysqli_fetch_assoc($query)){ $regs[] = $reg;}		
		echo json_encode($regs);
		
	}
	public function validarRegistro(){
		$conexion = new Conexion();
		$sql = "select * from registro where usuario='$this->usuario' and password='$this->password'";
		$q= mysqli_query($conexion->link, $sql) or die("Error: ".mysqli_error($conexion->link));
		if (mysqli_num_rows($q)>0){
			echo "si";
			session_start();
			$r=mysqli_fetch_assoc($q);
						$_SESSION["idregistro"]=$r["id"];
						$_SESSION["correo"]=$r["correo"];
						//correo
						
						$sql = "select * from datos_personales where id=".$r["id"];
						$q = mysqli_query($conexion->link, $sql);
						$r1 = mysqli_fetch_assoc($q);
						$_SESSION ["nombre"]="";
						$_SESSION ["paterno"]="";
						$_SESSION ["materno"]="";
						$_SESSION ["control"]="";
						$_SESSION ["sexo"]="";
						$_SESSION ["telefono"]="";
						$_SESSION ["celular"]="";
						$_SESSION ["direccion"]="";
						$_SESSION ["ciudad"]="";
						$_SESSION ["estado"]="";
						$_SESSION ["carrera"]="";
						$_SESSION ["generacion"]="";
						$_SESSION ["correo"]="";
						$_SESSION ["redes"]="";
						$_SESSION ["compartir"]="";
						if ($r1){
								$_SESSION["nombre"] = $r1["Nombre"];
								$_SESSION["paterno"] = $r1["Paterno"];
								$_SESSION["materno"] = $r1["Materno"];
								$_SESSION["control"] = $r1["Control"];
								$_SESSION["sexo"] = $r1["Sexo"];
								$_SESSION["telefono"] = $r1["Telefono"];
								$_SESSION["celular"] = $r1["Celular"];
								$_SESSION["direccion"] = $r1["Direccion"];
								$_SESSION["ciudad"] = $r1["Ciudad"];
								$_SESSION["estado"] = $r1["Estado"];
								$_SESSION["carrera"] = $r1["Carrera"];
								$_SESSION["generacion"] = $r1["Generacion"];
								$_SESSION["correo"] = $r1["Correo"];
								$_SESSION["redes"] = $r1["Redes"];
								$_SESSION["compartir"] = $r1["Compartir"];
								
								
							}
						$sql = "select * from experiencia_laboral where id=".$r["id"];
						$q = mysqli_query($conexion->link, $sql);
						$r2 = mysqli_fetch_assoc($q);
						$_SESSION ["tiempo"]="";
						$_SESSION ["trabajando"]="";
						$_SESSION ["ejerciendo"]="";
						$_SESSION ["trabajo"]="";
						$_SESSION ["formal"]="";
						$_SESSION ["negocio"]="";
						$_SESSION ["teloficina"]="";
						$_SESSION ["conocimiento"]="";
						$_SESSION ["cursos"]="";
						$_SESSION ["conferencias"]="";
						$_SESSION ["apoyoServicio"]="";
						$_SESSION ["apoyoResidentes"]="";
						$_SESSION ["apoyoBolsa"]="";
						if ($r2){
								$_SESSION["tiempo"] = $r2["tiempo"];
								$_SESSION["trabajando"] = $r2["trabajando"];
								$_SESSION["ejerciendo"] = $r2["ejerciendo"];
								$_SESSION["trabajo"] = $r2["trabajo"];
								$_SESSION["formal"] = $r2["formal"];
								$_SESSION["negocio"] = $r2["negocio"];
								$_SESSION["teloficina"] = $r2["telOficina"];
								$_SESSION["conocimiento"] = $r2["conocimiento"];
								$_SESSION["cursos"] = $r2["cursos"];
								$_SESSION["conferencias"] = $r2["conferencias"];
								$_SESSION["apoyoServicio"] = $r2["apoyoServicio"];
								$_SESSION["apoyoResidentes"] = $r2["apoyoResidentes"];
								$_SESSION["apoyoBolsa"] = $r2["apoyoBolsa"];
								
								
							}
						$sql = "select * from titulado where id=".$r["id"];
						$q = mysqli_query($conexion->link, $sql);
						$r3 = mysqli_fetch_assoc($q);
						$_SESSION ["situacion"]="";
						$_SESSION ["motivo"]="";
						if ($r3){
								$_SESSION["situacion"] = $r3["situacion"];
								$_SESSION["motivo"] = $r3["motivo"];
							}
						} else{echo"El usuario no está registrado";}
	}
}

?>
