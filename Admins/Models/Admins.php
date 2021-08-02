<?php 
require_once ('../../Connection.php');
class Admins extends Connection{
	
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function add($firstname, $lastname, $user, $password){
		$statement = $this->db->prepare("INSERT INTO USUARIOS (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:Nombre, :Apellido, :Usuario, :Password, Administrator, Active)");
		$statement->bindParam(':Nombre',$firstname);
		$statement->bindParam(':Apellido',$lastname);
		$statement->bindParam(':Usuario',$user);
		$statement->bindParam(':Password',$password);
		
		if($statement->execute()){
			header('Location:../pages/index.php');
		}else{
			header('Location:../pages/add.php');
		}
	}

	public function get(){
		$rows = NULL;
		$statement = $this->bd->prepare("SELECT * FROM USUARIOS WHERE PERFIL = Administrator");
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;
	}

	public function getById($id){
		$rows = NULL;
		$statement = $this->bd->prepare("SELECT * FROM USUARIOS WHERE PERFIL = Administrator AND ID_USUARIO = :Id");
		$statement->bindParam(':Id',$id);
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;
	}

	public function update($id,$firstname, $lastname, $user, $password,$status){

		$statement = $this->db->prepare("UPDATE USUARIOS SET NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO = :Usuario, PASSWORD = :Password, ESTADO = :Estado WHERE ID_USUARIO = :Id");
		$statement->bindParam(':Id',$id);
		$statement->bindParam(':Nombre',$firstname);
		$statement->bindParam(':Apellido',$lastname);
		$statement->bindParam(':Usuario',$user);
		$statement->bindParam(':Password',$password);
		$statement->bindParam(':Estado',$status);
	if($statement->execute()){
			header('Location:../pages/index.php');
		}else{
			header('Location:../pages/edit.php');
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