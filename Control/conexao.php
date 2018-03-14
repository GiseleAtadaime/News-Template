<?php

	class conexao{

		private $servername;
		private $username;
		private $password;
		private $bd;
                private $conexao = null;


		function __construct($servername,$username,$password,$bd){
			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->bd = $bd;
                        error_log("Construido com sucesso");
		}
                function getUsername() {
                    return $this->username;
                }
                function getConexao() {
                    return $this->conexao;
                }

                public function conectar(){

                    $this->conexao = new mysqli($this->servername,$this->username,$this->password,$this->bd);

                    if($this->conexao->connect_error){
                            error_log("Connection failed: " . $this->conexao->connect_error);
                    }
                    else{
                            error_log("Conection successful");
                    }
                    return $this->conexao;
		}
		public function fecharConexao(){
			$this->conexao->close();
		}
	}
	
?>