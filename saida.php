<?php

	$servername = 'localhost';
	$username = 'root';
	$password = 'bd1234';
	$mysqli = new mysqli($servername,$username,$password,'newsblog');

	if($mysqli->connect_error){
		echo "Connection failed: " . $mysqli->connect_error;
	}
	else{
		echo "Conection successful\n";
	}


	$result = $mysqli->query('Select MAX(Id_Post) from Post');
	while($row = $result->fetch_assoc()){
		$ID = $row['MAX(Id_Post)'];
	}

	$ID++;
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	$genero = $_POST['genero'];
	$data = '01-03-2018';
	$autor = 1;
	$likes = 5;
	print $ID;
	print "<br>$genero";
/*
	if($stmt = $mysqli->prepare("Insert into Post(Titulo,Conteudo,Likes,genero,autor) values(?, ?, ?, ?, ?)")){
		$stmt->bind_param('ssiii',$titulo,$conteudo,$likes,$genero,$autor);
		$stmt->execute();

		echo "Inserido";

		$stmt->close();
	}
	else{
		printf("erro: %s ", $mysqli->error);
	}

*/

	$mysqli->close();
		
	?>