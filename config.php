<?php 
function connect_user() {
	$server = 'localhost';
	$username = 'rbasset';
	$password = 'Drpepper1991';
	$database = 'tech_repair_genius';
	
	//Create Connection
	try{
		$conn = new PDO("mysql:host=$server;database=tech_repair_genius", $username, $password);
		// Set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch(PDOException $e){
		$Message = "Connection failed: " . $e->getMessage();
	}
	return $conn;
}

?>
