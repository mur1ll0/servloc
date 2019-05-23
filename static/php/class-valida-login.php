<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';

  if ($ok){
	if (isset($_POST['usuario'])){
		echo 'Usuário logado: '.$_POST['usuario'];
	}
  }else{
    echo $msgErro;
  }

?>
