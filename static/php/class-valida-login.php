<?php
	session_start();
	require '../../static/php/connection.php';
	

	if (isset($_POST['usuario'])){
		$_SESSION['user_id'] = 1;
		$_SESSION['user_name'] = 'Teste';
		echo 'Usuário logado: '.$_POST['usuario'];
	}
	
	if (isset($_GET['action'])){
		if ($_GET['action'] == 'logout'){
			session_destroy();
		}
	}
	
?>
