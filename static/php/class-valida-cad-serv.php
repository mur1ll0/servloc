<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';

  if ($ok && !empty($_POST['nome'])){
    $result = query("SELECT count(*) teste FROM servicos WHERE nome = '".$_POST['nome']."' and ativo = 1;");
    if ($result[0][0] > 0){
      $ok = false;
      $msgErro = $msgErro.' '.'Serviço já cadastrado.';
    }
  }else{
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o campo de nome do serviço.';
  }
  if ($ok && empty($_POST['desc'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha uma descrição para o serviço.';
  }
  if ($ok && (empty($_POST['estado']) || $_POST['estado'] == '*')){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o estado que será prestado para o serviço.';
  }
  if ($ok && (empty($_POST['cidade']))){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o cidade que será prestado para o serviço.';
  }
  if ($ok && (empty($_POST['categoria']) || (int)$_POST['categoria'] < 1 )){
    $ok = false;
    $msgErro = $msgErro.' '.'Vincule pelo menos uma Categoria ao serviço.';
  }
  if ($ok && empty($_POST['tags'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Vincule pelo menos uma Tag ao serviço.';
  }
  if ($ok && empty($_POST['telefone'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha um telefone para contato.';
  }
  if ($ok && empty($_POST['email'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha um email para contato.';
  }

  if ($ok){
			//Para decriptografar quando usar encodeURI, usar rawurldecode()
			$nomeServ = isset($_POST['nome'])?$_POST['nome']:'';
			$descServ = isset($_POST['desc'])?$_POST['desc']:'';
			$estadoServ = strtoupper(isset($_POST['estado'])?$_POST['estado']:'');
			$cidadeServ = isset($_POST['cidade'])?$_POST['cidade']:'';
      $ativoServ = 1;

      query("INSERT into servicos
                (nome, descricao, estado, cidade, ativo)
              values
                ('".$nomeServ."',
                  '".$descServ."',
                  '".$estadoServ."',
                  '".$cidadeServ."',
                  '".$ativoServ."');");
		  echo "Serviço cadastrado com sucesso.";
  }else{
    echo $msgErro;
  }

?>
