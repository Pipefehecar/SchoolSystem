<?php 

class Connection{
	protected $db;
	private $driver = "mysql";
	private $host = "localhost";
	private $bd = "notas";
	private $user = "root";
	private $password = "";

	public function __construct(){
		try {
			$db = new PDO("{$this->driver}:dbname={$this->bd};host={$this->host}", $this->user,$this->password);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		} catch (Exception $e) {
			echo "An error has ocurred 💀".$e->getMessage();
			
		}
	}
}

 ?>