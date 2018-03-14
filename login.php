
<!DOCTYPE html>

<html>
	<head>
		<title>Bom dia Piedade</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="CSS/reset.css">
                <link rel="stylesheet" type="text/css" href="CSS/header.css">
                <link rel="stylesheet" type="text/css" href="CSS/login.css">
        	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               
	</head>
		
	<body>
		
            <?php include("header.php");
               
                error_log("estamos aqui");
                
                
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    //$daoUser = new DaoUser($conexao->conectar());
    				echo $username;
                    //$usuario = $daoUser->consultar($username);

                }
                
            ?>
		<section class="container">
			<form class="login box" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
				<fieldset>

					<legend>Login</legend>
					Username<input type="text" name="username">
					Senha<input type="password" name="password">
					<input type="submit" name="submit" value="entrar">
				</fieldset>
			</form>
		</section>
            
            <section>
            </section>

	</body>
	<script type="text/javascript" src="main.js"></script>
</html>