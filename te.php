<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ethereal by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
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
	$mysqli = new mysqli($servername,$username,$password,'newsblog');
	if($mysqli->connect_error){
		echo "Connection failed: " . $mysqli->connect_error;
	}
	else{
		echo "Conection successful\n";
	}

	$result = $mysqli->query('select * from user');
	while($row = $result->fetch_assoc()){
		print "id: " . $row["Id_user"] . " Username: " . $row["username"] .
		" password: " . $row["password"] . " nome: " . $row["nome"];
	}

	
?>
	
	<body>
		<h1>Teste</h1>
		<form action="saida.php" method="POST">
			<textarea name="titulo" ></textarea>
			<textarea name="conteudo"></textarea>
			<select name="genero">
				<option value="1">Ação</option>
				<option value="2">Geral</option>
				<option value="3">Opinião</option>
			</select>
			<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
			<input type="submit" name="enviar">
		</form>	
	</body>

</html>
<?php $mysqli->close(); ?>