<?php
    class User{
        private $id,$username,$password,$nome,$data_nascimento,$descricao;
        
        function __construct($id,$username,$password,$nome,$data_nascimento,$descricao) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->nome = $nome;
            $this->data_nascimento = $data_nascimento;
            $this->descricao = $descricao;
        }
        
        function getId() {
            return $this->id;
        }

        function getUsername() {
            return $this->username;
        }

        function getPassword() {
            return $this->password;
        }

        function getNome() {
            return $this->nome;
        }

        function getData_nascimento() {
            return $this->data_nascimento;
        }

        function getDescricao() {
            return $this->descricao;
        }
        
        function setUsername($username) {
            $this->username = $username;
        }

        function setPassword($password) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setData_nascimento($data_nascimento) {
            $this->data_nascimento = $data_nascimento;
        }

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        function verifyPassword($password){
            return password_verify($password, $this->password);
        }

        
    }
?>