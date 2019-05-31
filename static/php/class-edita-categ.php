<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';
  $dados = explode(',',key($_POST));


  if ($ok && $dados[0] == 1){
    $result = query("SELECT count(*) teste FROM categorias WHERE codigo = '".$dados[1]."';");
    if ($result[0][0] > 0){
      query("delete from categorias where codigo = '".$dados[1]."';");
      echo ('Serviço exluido com sucesso.');
    }else{
      $ok = false;
      $msgErro = 'Serviço não encontrado.';
    }
  }else if ($ok && $dados[0] == 2){
    $result = query("SELECT * FROM categorias WHERE codigo = '".$dados[1]."';");
    if (sizeof($result[0]) > 0){
      //var_dump($result);
      header("Location: ../../cadastro-servico.php");
    }
  }

?>
