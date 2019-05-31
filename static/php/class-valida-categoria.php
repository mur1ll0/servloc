<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';

  if ($ok && !empty($_POST['nome'])){
    $result = query("SELECT count(*) teste FROM categorias WHERE nome = '".$_POST['nome']."';");
    if ($result[0][0] > 0){
      $ok = false;
      $msgErro = $msgErro.' '.'Categoria já cadastrada.';
    }
  }else{
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o campo de nome da categoria.';
  }

  if ($ok){
			//Para decriptografar quando usar encodeURI, usar rawurldecode()
			$nomeServ = isset($_POST['nome'])?$_POST['nome']:'';

      query("INSERT into categorias
                (nome)
              values
                ('".$nomeServ."');");
		  echo "Categoria cadastrada com sucesso.";
  }else{
    echo $msgErro;
  }

?>
