<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';
  $dados = explode(',',key($_POST));

  if ($ok && $dados[0] == 1){
    $result = query("SELECT count(*) teste FROM servicos WHERE codigo = '".$dados[1]."' and ativo = 1;");
    if ($result[0][0] > 0){
      query("UPDATE servicos
                SET ativo = 0
                WHERE codigo = '".$dados[1]."'");
      echo ('Serviço exluido com sucesso.');
    }else{
      $ok = false;
      $msgErro = 'Serviço não encontrado.';
    }
  }else if ($ok && $dados[0] == 2){
    $result = query("SELECT * FROM servicos WHERE codigo = '".$dados[1]."' and ativo = 1;");
    var_dump($result);
    if (sizeof($result[0]) > 0){
      header("Location: ../../cadastro-servico.php");
    }
  }

?>
