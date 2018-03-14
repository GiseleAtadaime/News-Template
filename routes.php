<?php
	require_once("../cfgini.php");
	$conexao->conectar();

	if(isset($_GET['tipo']) && isset($_GET['id'])){
		$tipo = $_GET['tipo'];
		$id = $_GET['id'];

		switch ($tipo) {
			case 'post':
					$daoPost = new DaoPost($conexao->getConexao());
                                        $postName = $daoPost->consultarTitulo($id);
                                        $conexao->fecharConexao();
					header('Location: posts.php?id=' . $id . "&titulo=" . $postName);
                                        
					exit;

				break;
			
			default:
				# code...
				break;
		}
	}
?>