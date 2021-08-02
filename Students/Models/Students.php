<?php 
require_once ('../../Connection.php');
class Students extends Connection{
	
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function add($firstname,$lastname,$document,$email,$subject,$teacher,$average,$date){
		$statement = $this->db->prepare("INSERT INTO ESTUDIANTES (NOMBRE, APELLIDO, DOCUMENTO, CORREO, MATERIA, DOCENTE, PROMEDIO, FECHA_REGISTRO) VALUES (:Firstname, :Lastname,:Document, :Email, :Subjec, :Average, :DateRegister)");
		$statement->bindParam(":Firstname",$firstname);
		$statement->bindParam(":Lastname",$lastname);
		$statement->bindParam(":Document",$document);
		$statement->bindParam(":Email",$email);
		$statement->bindParam(":Subjec",$subject);
		$statement->bindParam(":Average",$average);
		$statement->bindParam(":DateRegister",$date);
		if ($statement->execute()){
			header("Location: ../pages/index.php");
		}else{
			header("Location: ../pages/add.php");
		}
	}

	public function get(){
		$statement->$this->db->prepare("SELECT * FROM ESTUDIANTES");
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;

	}

	public function getById($id){
		$statement->$this->db->prepare("SELECT * FROM ESTUDIANTES WHERE ID_ESTUDIANTE = :Id");
		$statement->bindParam(":Id",$id);
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;
	}

	public function update($id,$firstname,$lastname,$document,$email,$subject,$teacher,$average,$date){
		$statement = $this->db->prepare("UPDATE ESTUDIANTES SET (NOMBRE = :Firstname , APELLIDO = :Lastname , DOCUMENTO = :Document , CORREO = :Email , MATERIA = :Subjec , DOCENTE = :Teacher , PROMEDIO = :Average, FECHA_REGISTRO = :DateRegister");
		$statement->bindParam(":Firstname",$firstname);
		$statement->bindParam(":Lastname",$lastname);
		$statement->bindParam(":Document",$document);
		$statement->bindParam(":Email",$email);
		$statement->bindParam(":Subjec",$subject);
		$statement->bindParam(":Average",$average);
		$statement->bindParam(":DateRegister",$date);
		if ($statement->execute()){
			header("Location: ../pages/index.php");
		}else{
			header("Location: ../pages/add.php");
		}
	}

	public function delete($id){
		$statement = $this->db->prepare("DELETE FROM USUARIOS  WHERE ID_USUARIO = :Id");
		$statement->bindParam(':Id',$id);
		if($statement->execute()){
			header('Location:../pages/index.php');
		}else{
			header('Location:../pages/delete.php');
		}
	}
}
 ?>