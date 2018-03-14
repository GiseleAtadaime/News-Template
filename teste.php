<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = 'bd1234';
	/*
	$cn = new mysqli($servername,$username,$password);

	if($cn->connect_error){
		echo "Connection failed: " . $cn->connect_error;
	}
	else{
		echo "Conection successful";
	}
	*/
	header('content-type:text/plain');
	$mysqli = new mysqli($servername,$username,$password,'newsblog');
	if($mysqli->connect_error){
		echo "Connection failed: " . $mysqli->connect_error;
	}
	else{
		echo "Conection successful\n";
	}

	$result = $mysqli->query('select * from user');
	while($row = $result->fetch_assoc()){
		echo "id: " . $row["Id_user"] . " Username: " . $row["username"] .
		" password: " . $row["password"] . " nome: " . $row["nome"];
	}

	$mysqli->close();
?>