<?php 
require_once ('../../Connection.php');
class Subjects extends Connection{
	
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function add($name){
		$statement = $this->db->prepare("INSERT INTO MATERIAS (MATERIA) VALUES (:SubjectName)");
		$statement->bindParam(":SubjectsName",$name);
		if($statement->execute()){
			header("Location: ../pages/index.php");
		}else{
			header("Location: ../pages/add.php");
		}
	}

	public function get(){
		$statement->$this->db->prepare("SELECT * FROM MATERIAS");
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;
	}

	public function getById($id){
		$statement->$this->db->prepare("SELECT * FROM MATERIAS WHERE ID_MATERIA = :Id");
		$statement->bindParam(":Id",$id);
		$statement->execute();
		while($result = $statement->fetch()){
			$rows[] = $result;
		}
		return $rows;
	}

	public function update($id,$subjectname){
		$statement = $this->db->prepare("UPDATE MATERIAS SET (MATERIA = :SubjectName) WHERE ID_MATERIA = :Id");
		$statement->bindParam(":Id",$id);
		$statement->bindParam(":SubjectName",$subjectname);
		
		if ($statement->execute()){
			header("Location: ../pages/index.php");
		}else{
			header("Location: ../pages/add.php");
		}
	}

	public function delete($id){
		$statement = $this->db->prepare("DELETE FROM MATERIAS  WHERE ID_MATERIA = :Id");
		$statement->bindParam(':Id',$id);
		if($statement->execute()){
			header('Location:../pages/index.php');
		}else{
			header('Location:../pages/delete.php');
		}
	}
}
 ?>