<?php
    require_once("Model/Genero.php");
    
    class DaoGenero{
        private $connection;
        
        function __construct($connection) {
            $this->connection = $connection;
        }
        
        function consultar($id){
            $statement = $this->connection->prepare("select descricao from genero where Id_genero = ?");
            if($statement){
                $statement->bind_param("i",$id_gen);
                $id_gen = $id;
                $statement->execute();
                $statement->bind_result($desc);
                if($statement->fetch()){
                    $resultado = new Genero($id,$desc); 
                }
            }
            else{
                error_log("Prepared statement error: " . $statement->error);
            }
            return $resultado;
        }
        function atualizar($genero){
            $statement = $this->connection->prepare("update genero set descricao = ? where Id_genero = ?");
            if($statement){
                $statement->bind_param("is",$desc,$id);
                $id = $genero->getId();
                $desc = $genero->getDescricao();
                $statement->execute();
            }
            else{
                error_log("Prepared statement error: " . $statement->error);
            }
            
        }
        function inserir($genero){
            $statement = $this->connection->prepare("insert into genero(Id_genero,descricao) values (?,?)");
            if($statement){
                $statement->bind_param("is",$id,$desc);
                $id = $genero->getId();
                $desc = $genero->getDescricao();
                $statement->execute();
            }
            else{
                error_log("Prepared statement error: " . $statement->error);
            }
        }
        function excluir($id){
            $statement = $this->connection->prepare("delete from genero where Id_genero = ?");
            if($statement){
                $statement->bind_param("i",$id_genero);
                $id_genero = $id;
                $statement->execute();
            }
            else{
                error_log("Prepared statement error: " . $statement->error);
            }
        }


    }
?>