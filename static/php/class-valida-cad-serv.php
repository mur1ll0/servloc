<?php
	require '../../static/php/connection.php';
	session_start();
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

	query("INSERT into servicos
			(nome, descricao, estado, cidade, tags, ativo, contatos, email)
		  values
			('".$nomeServ."',
			  '".$descServ."',
			  '".$estadoServ."',
			  '".$cidadeServ."',
			  '".$tagsServ."',
			  '".$ativoServ."',
			  '".$contatoServ."',
			  '".$emailServ."'
			  );");
			  
	$result = query("SELECT * from servicos where
			nome = '".$nomeServ."' and
			ativo = '".$ativoServ."';");
			  
	$servico_id = $result[0][0];
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('d/m/Y H:i:s');
			  
			  
	query("INSERT into servicos_pessoas
			(servico, pessoa, datahora)
		  values
			('".$servico_id."',
			  '".$_SESSION['user_id']."',
			  '".$date."');");
			  
			  
	echo "Serviço cadastrado com sucesso.";
  }else{
    echo $msgErro;
  }

?>
