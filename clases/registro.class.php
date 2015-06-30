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
						if ($r1){
								$_SESSION["tiempo"] = $r2["tiempo"];
								$_SESSION["trabajando"] = $r2["trabajando"];
								$_SESSION["ejerciendo"] = $r2["ejerciendo"];
								$_SESSION["formal"] = $r2["formal"];
								$_SESSION["negocio"] = $r2["negocio"];
								$_SESSION["teloficina"] = $r2["telOficina"];
								$_SESSION["conocimiento"] = $r2["conocimiento"];
								$_SESSION["cursos"] = $r2["cursos"];
								$_SESSION["conferencias"] = $r2["conferencias"];
								$_SESSION["apoyo"] = $r2["apoyo"];
								
								
							}
						} else{echo"no";}
	}
}

?>
