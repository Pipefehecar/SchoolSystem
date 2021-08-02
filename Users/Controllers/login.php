<?php 
require_once("../Models/Users.php");

if($_POST){
	 $Usuario = $_POST["username"];
	 $Password = $_POST["password"];

	 $usuario = new Users();
	 echo $usuario->login($Usuario, $Password);
}else{
	header("Location:../../index.php");
}


?>