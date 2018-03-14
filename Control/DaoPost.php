<?php 
        require_once("Model/Post.php");
	class DaoPost{
		private $conexao;

		public function __construct($mysqli){
			$this->conexao = $mysqli;
		}
                public function getConnection() {
                    return $this->conexao;
                }
                public function consultarTitulo($id){
                    $resultado = null;
                    $statement = $this->conexao->prepare("select Titulo from post where Id_Post = ?");
                    if($statement){
                        $statement->bind_param("i",$ID);
                        $ID = $id;
                        $statement->execute();
                        $statement->bind_result($titulo);
                        if($statement->fetch()){
                            $resultado = $titulo; 
                        }
                    }
                    else{
                        error_log("Prepared statement error: " . $statement->error);
                    }
                    return $resultado;
                }
                public function consultarMaisAtual(){
                    $resultado = null;
                    $statement = $this->conexao->prepare("select max(Id_Post) from post");
                    if($statement){
                        $statement->execute();
                        $statement->bind_result($id);
                        if($statement->fetch()){
                            $resultado = $id; 
                        }
                    }
                    else{
                        error_log("Prepared statement error: " . $statement->error);
                    }
                    return $resultado;
                }
                public function consultar($ID){
                    $resultado = null;
                    $statement = $this->conexao->prepare("Select Titulo,Conteudo,Likes,genero,autor,data from Post where Id_Post = ?");
                    $statement->bind_param("i",$id);
                    $id = $ID;
                    $statement->execute();
                    $statement->bind_result($titulo,$conteudo,$likes,$genero,$autor,$data);
                    if($statement->fetch()){
                        $resultado = new Post($ID,$titulo,$conteudo,$likes,$genero,$autor,$data);
                    }
                    else{
                        error_log("Erro de consulta");
                    }
                    return $resultado;
                }
                public function consultarResumido($ID){      
                    $resultado = null;
                    $statement = $this->conexao->prepare("Select Titulo,Left(Conteudo,150),Likes,genero,autor,data from Post where Id_Post = ?");
                    $statement->bind_param("i",$id);
                    $id = $ID;
                    $statement->execute();
                    $statement->bind_result($titulo,$conteudo,$likes,$genero,$autor,$data);
                    if($statement->fetch()){
                        $resultado = new Post($ID,$titulo,$conteudo,$likes,$genero,$autor,$data);
                    }
                    else{
                        error_log("Erro de consulta");
                    }
                    return $resultado;
                    
                }
                
               public function inserir($post){
                    $query = "Insert into Post(Titulo,Conteudo,Likes,genero,autor,Data) values(?,?,?,?,?,?)";
                    if($statement = $this->conexao->prepare($query)){
                        $statement->bind_param("ssiiis",$titulo,$conteudo,$likes,$genero,$autor,$data);
                        $titulo = $post->getTitulo();
                        $conteudo = $post->getConteudo();
                        $likes = $post->getLikes();
                        $genero = $post->getGenero();
                        $autor = $post->getAutor();
                        $data = $post->getData();
                        $statement->execute();
                    }
                    else{
                        error_log("prepared statement error: " . $statement->error);
                    }
                }
                public function atualizar($post){
                    if($statement = $this->conexao->prepare("Update Post set Titulo = ?, Conteudo = ?, Likes = ?,"
                            . "genero = ?,autor = ?,Data = ? where Id_Post = ?")){
                        $statement->bind_param("ssiiisi",
                                $titulo,$conteudo,$likes,$genero,$autor,$data,$id);
                        $titulo = $post->getTitulo();
                        $conteudo = $post->getConteudo();
                        $likes = $post->getLikes();
                        $genero = $post->getGenero();
                        $autor = $post->getAutor();
                        $data = $post->getData();
                        $id = $post->getID();
                        $statement->execute();
                    }
                    else{
                       error_log("prepared statement error: " . $statement->error); 
                    }
                }
                public function excluir($post){
                    if($statement = $this->conexao->prepare("Delete from Post where Id_Post = ?")){
                        $statement->bind_param("i",$id);
                        $id = $post->getId();
                        $statement->execute();
                    }
                    else{
                       error_log("prepared statement error: " . $statement->error); 
                    }
                }
	}
?>