<?php
function loginCustomer($username, $password){
	$connection = connect_user();

	try{
		$sql = "SELECT username, password FROM users WHERE username = :username";

		$stmt = $connection->prepare($sql);
		$stmt->bindValue(':username', $username, PDO::PARAM_STR);
		$stmt->execute();
}


?>