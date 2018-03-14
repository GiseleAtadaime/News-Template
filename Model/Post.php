<?php 
    
    class Post{
       private $ID;
       private $titulo;
       private $conteudo;
       private $likes;
       private $data;
       private $genero;
       private $autor;
       
       function __construct($ID, $titulo, $conteudo, $likes, $genero, $autor,$data) {
           $this->ID = $ID;
           $this->titulo = $titulo;
           $this->conteudo = $conteudo;
           $this->likes = $likes;
           $this->genero = $genero;
           $this->autor = $autor;
           $this->data = $data;
       }
       
       function getID() {
           return $this->ID;
       }
       function getTitulo() {
           return $this->titulo;
       }
       function getConteudo() {
           return $this->conteudo;
       }
       function getLikes() {
           return $this->likes;
       }
       function getData() {
           return $this->data;
       }
       function getGenero() {
           return $this->genero;
       }
       function getAutor() {
           return $this->autor;
       }
       function setTitulo($titulo) {
           $this->titulo = $titulo;
       }
       function setConteudo($conteudo) {
           $this->conteudo = $conteudo;
       }
       function setLikes($likes) {
           $this->likes = $likes;
       }
       function setData($data) {
           $this->data = $data;
       }
       function setGenero($genero) {
           $this->genero = $genero;
       }
       function setAutor($autor) {
           $this->autor = $autor;
       }
    }
?>