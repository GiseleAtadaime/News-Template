<?php

    class Comment{
        
        private $id,$nome,$conteudo,$post;
        
        function __construct($id, $nome, $conteudo, $post) {
            $this->id = $id;
            $this->nome = $nome;
            $this->conteudo = $conteudo;
            $this->post = $post;
        }
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getConteudo() {
            return $this->conteudo;
        }

        function getPost() {
            return $this->post;
        }
        
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setConteudo($conteudo) {
            $this->conteudo = $conteudo;
        }

        function setPost($post) {
            $this->post = $post;
        }


    
    }
?>