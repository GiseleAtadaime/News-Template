<?php
    class Genero{
        private $id,$descricao;
        
        function __construct($id, $descricao) {
            $this->id = $id;
            $this->descricao = $descricao;
        }
        function getId() {
            return $this->id;
        }

        function getDescricao() {
            return $this->descricao;
        }
    }
?>