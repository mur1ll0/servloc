<?php
	session_start();
	require '../../static/php/connection.php';
	
	$ok = true;
	$msgErro = '';
	
	
	//LOGAR
	if ($ok && isset($_POST['usuario'])){
		$user = rawurldecode($_POST['usuario']);
		$pass = rawurldecode($_POST['senha']);
		
		$result = query("SELECT count(*) teste FROM pessoas WHERE usuario = '".$user."' and senha = '".$pass."';");
		if ($result[0][0] <= 0){
			$ok = false;
			$msgErro = $msgErro.' '.'Usuário ou senha incorretos!';
			echo $msgErro;
		}
		else{
			$result = query("SELECT * FROM pessoas WHERE usuario = '".$user."' and senha = '".$pass."';");
			$_SESSION['user_id'] = $result[0][0];
			$_SESSION['user_name'] = $result[0][1];
			$_SESSION['user_admin'] = $result[0][13];
		}
	}
	
	//DESLOGAR
	if (isset($_GET['action'])){
		if ($_GET['action'] == 'logout'){
			session_destroy();
		}
	}
?>
