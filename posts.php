<!DOCTYPE html>

<html>
	<head>
                <?php
                        if(isset($_GET['titulo']) && isset($_GET['id'])){
                                $titulo = $_GET['titulo'];
                                $id = $_GET['id'];
                        }
                        else{
                                header('Location: error.php');
                        }
                ?>
		<title><?php echo $titulo; ?></title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="CSS/reset.css">
                <link rel="stylesheet" type="text/css" href="CSS/header.css">
                <link rel="stylesheet" href="CSS/posts.css"> <!--main - Copia-->
        	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               
	</head>
        <body>
                <?php include("header.php"); ?>
                <main class="content container">
                    <?php
                        $conexao->conectar();
                        $daoPost = new DaoPost($conexao->getConexao());
                        $postPrincipal = $daoPost->consultar($id);
                        
                        

                    ?>
                    <section class="post box">
                            <h1 class="post__titulo"><?php echo $titulo; ?></h1>
                            <article class="post__texto"><?php echo $postPrincipal->getConteudo(); ?></article>
                    </section>
                </main>
                <?php include("footer.php"); 
                ?>
                
        </body>
       
</html>