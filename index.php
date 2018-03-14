<!DOCTYPE html>

<html>
	<head>
		<title>Bom dia Piedade</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="CSS/reset.css">
                <link rel="stylesheet" type="text/css" href="CSS/header.css">
                <link rel="stylesheet" href="CSS/main.css"> <!--main - Copia-->
        	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               
	</head>
        <body>
                <?php include("header.php") ?>
                <main>
                    <?php
                       $conexao->conectar();
                       $daoPost = new DaoPost($conexao->getConexao());
                       $y = $daoPost->consultarMaisAtual();
                       for($i=0;$i<5;$i++){
                           $hero[$i] = $daoPost->consultarResumido($y);
                           $y--;
                       }
                       $daoGenero = new DaoGenero($conexao->getConexao());
                       for($i=0;$i<5;$i++){
                           $genero[$i] = $daoGenero->consultar($hero[$i]->getGenero());
                       }
                       
                       
                    ?>
                        <section class="content container">
                                <section class="hero box">
                                        <div class="banner-wrap">
                                                <div class="slide" id="slide">
                                                        <figure class="slide_figure">
                                                            <img class="slide_img" src="Assets/06.jpg">
                                                            <div class="slide_content">
                                                                <a class="tag_slide" href="#"><?php echo $genero[0]->getDescricao();?></a>
                                                            <h1 class="hero_titulo"><?php echo $hero[0]->getTitulo(); ?></h1>
                                                            <p class="hero_texto"><?php echo $hero[0]->getConteudo(); ?></p>
                                                            <a class="link_slide" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[0]->getID();?>')">LEIA MAIS</a>
                                                            </div> 
                                                        </figure>
                                                        <figure class="slide_figure">
                                                            <img class="slide_img" src="Assets/05.jpg">
                                                            <div class="slide_content">
                                                            <a class="tag_slide" href="#"><?php echo $genero[1]->getDescricao();?></a>
                                                            <h1 class="hero_titulo"><?php echo $hero[1]->getTitulo(); ?></h1>
                                                            <p class="hero_texto"><?php echo $hero[1]->getConteudo(); ?></p>
                                                            <a class="link_slide" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[1]->getID();?>')">LEIA MAIS</a>
                                                            </div> 
                                                        </figure>
                                                        <figure class="slide_figure">
                                                            <img class="slide_img" src="Assets/04.jpg">
                                                            <div class="slide_content">
                                                            <a class="tag_slide" href="#"><?php echo $genero[2]->getDescricao();?></a>
                                                            <h1 class="hero_titulo"><?php echo $hero[2]->getTitulo(); ?></h1>
                                                            <p class="hero_texto"><?php echo $hero[2]->getConteudo(); ?></p>
                                                            <a class="link_slide" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[2]->getID();?>')">LEIA MAIS</a>
                                                            </div> 
                                                        </figure>
                                                        <figure class="slide_figure">
                                                            <img class="slide_img" src="Assets/03.jpg">
                                                            <div class="slide_content">
                                                            <a class="tag_slide" href="#"><?php echo $genero[3]->getDescricao();?></a>
                                                            <h1 class="hero_titulo"><?php echo $hero[3]->getTitulo(); ?></h1>
                                                            <p class="hero_texto"><?php echo $hero[3]->getConteudo(); ?></p>
                                                            <a class="link_slide" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[3]->getID();?>')">LEIA MAIS</a>
                                                            </div> 
                                                        </figure>
                                                        <figure class="slide_figure">
                                                            <img class="slide_img" src="Assets/03.jpg">
                                                            <div class="slide_content">
                                                            <a class="tag_slide" href="#"><?php echo $genero[4]->getDescricao();?></a>
                                                            <h1 class="hero_titulo"><?php echo $hero[4]->getTitulo(); ?></h1>
                                                            <p class="hero_texto"><?php echo $hero[4]->getConteudo(); ?></p>
                                                            <a class="link_slide" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[4]->getID();?>')">LEIA MAIS</a>
                                                            </div> 
                                                        </figure>
                                                </div>
                                                <div class="legend-wrap">
                                                    <div class="legend_hero legend_hero-active" onclick="trocaimg(0)">
                                                        <p class="tag"><?php echo $genero[0]->getDescricao(); ?></p>
                                                        <p class="legend_titulo"><?php echo $hero[0]->getTitulo(); ?></p>  
                                                        
                                                         
                                                    </div>
                                                    <div class="legend_hero" onclick="trocaimg(1)">
                                                        <p class="tag"><?php echo $genero[1]->getDescricao(); ?></p>
                                                        <p class="legend_titulo"><?php echo $hero[1]->getTitulo(); ?></p> 
                                                        
                                                         
                                                    </div>
                                                    <div class="legend_hero" onclick="trocaimg(2)">
                                                        <p class="tag"><?php echo $genero[2]->getDescricao(); ?></p>
                                                        <p class="legend_titulo"><?php echo $hero[2]->getTitulo(); ?></p>
                                                        
                                                            
                                                    </div>
                                                    <div class="legend_hero" onclick="trocaimg(3)">
                                                        <p class="tag"><?php echo $genero[3]->getDescricao(); ?></p>
                                                        <p class="legend_titulo"><?php echo $hero[3]->getTitulo(); ?></p>  
                                                        
                                                          
                                                    </div>
                                                    <div class="legend_hero" onclick="trocaimg(4)">
                                                        <p class="tag"><?php echo $genero[4]->getDescricao(); ?></p>
                                                        <p class="legend_titulo"><?php echo $hero[4]->getTitulo(); ?></p>   
                                                        
                                                        
                                                    </div>    
                                                </div>
                                                
                                        </div>
                                </section>
                                <section class="ads1 box">
                                    <p class="ads1_legenda"><br>Crie seu site</p>
                                </section>
                                <section class="opiniao box">
                                    <div class="opiniao_wrap">
                                        <img class="opiniao_img" src="Assets/05.jpg">
                                        <div class="opiniao_text">
                                            <a class="tag_opiniao" href="#"><?php echo $genero[0]->getDescricao(); ?></a>
                                            <h1><?php echo $hero[0]->getTitulo(); ?></h1>
                                            <p><?php echo $hero[0]->getConteudo(); ?></p>
                                            <a class="opiniao_link" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[0]->getID();?>')">LEIA MAIS</a>
                                        </div>
                                        
                                    </div>  
                                </section>
                                <section class="ads2 box">
                                        
                                </section>
                                <section class="cotidiano box">
                                    <div class="cotidiano-wrap">
                                       <img src="Assets/dog.jpg">
                                        <div class="cotidiano_text">
                                                <a class="tag_cotidiano" href="#"><?php echo $genero[2]->getDescricao(); ?></a>
                                                <h1><?php echo $hero[2]->getTitulo(); ?></h1>
                                                <p><?php echo $hero[2]->getConteudo(); ?></p>
                                                <a class="cotidiano_link" href="javascript:redirect('<?php echo "post"; ?>','<?php echo $hero[2]->getID();?>')">LEIA MAIS</a>
                                        </div> 
                                    </div>
                                    
                                </section>
                        </section>
                        

                </main>
                <?php include("footer.php"); 
                    $conexao->fecharConexao();
                ?>
                
        </body>
       
</html>