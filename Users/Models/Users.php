<?php 
require_once ('../../Connection.php');
session_start();
class Users extends Connection{
	
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function login($User,$Password){
		
		$statement = $this->db->prepare("SELECT  * FROM usuarios WHERE USUARIO = :Usuario AND PASSWORD = :Password");
        $statement->bindParam(':Usuario',$User);
        $statement->bindParam(':Password',$Password);
        $statement->execute();

        if($statement->rowCount() == 1){
        	$result = $statement->fetch();
        	// echo $result;
            $_SESSION['NOMBRE'] = $result["NOMBRE"]." ".$result["APELLIDO"];
            $_SESSION['ID'] = $result["ID_USUARIO"];
            $_SESSION['PERFIL'] = $result["PERFIL"];
            return "You have logued in correctly!👌";
        }
        return "Ooops, there was an error in your login💀";

	}

	public function getName(){
		return $_SESSION['NOMBRE'];
	}
	public function getId(){
		return $_SESSION['ID'];
	}
	public function getPerfil(){
		return $_SESSION['PERFIL'];
	}

	public function validateSession(){
		if($_SESSION['ID'] == null){
			header('Location: ../../index.php');
		}
	}

	public function validateSessionAdministrator(){
		if($_SESSION['ID'] != null){
			if($_SESSION['PERFIL'] == 'Docente'){
				header('Location: ../../Students/Pages/index.php');
			}else{
				header('Location: ../../index.php');
			}
		}
	}	
}

 ?>