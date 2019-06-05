<?php
	require '../../static/php/connection.php';
	session_start();
  $ok = true;
  $msgErro = '';

  if ($ok && empty($_POST['nome'])){
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
  if ($ok && (empty($_POST['cidade']) || $_POST['cidade'] == 'Digite sua Cidade')){
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
  if ($ok && empty($_POST['contato'])){
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
	$tagsServ = isset($_POST['tags'])?$_POST['tags']:'';
	$contatoServ = isset($_POST['contato'])?$_POST['contato']:'';
	$emailServ = isset($_POST['email'])?$_POST['email']:'';
	
	$ativoServ = 1;

	query("UPDATE servicos set
			nome = '".$nomeServ."',
			descricao = '".$descServ."',
			estado = '".$estadoServ."',
			cidade = '".$cidadeServ."',
			ativo = '".$ativoServ."',
			tags = '".$tagsServ."',
			contatos = '".$contatoServ."',
			email = '".$emailServ."'
			where codigo = ".$_GET['edit'].";");
			  
			  
	echo "Serviço salvo com sucesso.";
  }else{
    echo $msgErro;
  }

?>
