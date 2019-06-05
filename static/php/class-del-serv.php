<?php
	session_start();
	require '../../static/php/connection.php';
	
	
	//DELETAR SERVIÇO SELECIONADO
	if (isset($_GET['delete'])){
		query('DELETE from servicos_pessoas where servico = '.$_GET['delete'].';');
		query('DELETE from servicos where codigo = '.$_GET['delete'].';');
		echo 'Serviço deletado com sucesso.';
	}
?>
