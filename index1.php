<?php
class connection{
	private $servername = "localhost:3308";
	private $username = "root";
	private $password = "";
	private $dbname = "t123";
	public $conn;
	public function __construct(){
		// Create connection
		$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);

		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
	}
}
?>
