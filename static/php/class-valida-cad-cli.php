<?php
	require '../../static/php/connection.php';
// var_dump(isset($_POST['usuario']));
// var_dump();
  // echo '1234124124';
  $ok = true;
  $msgErro = '';

  if (isset($_POST['usuario'])){
    $result = query("SELECT count(*) teste FROM pessoas WHERE usuario = '".$_POST['usuario']."'");
    if ($result[0][0] > 0){
      $ok = false;
      $msgErro = 'Usuario já cadastrado.';
    }
  }else{
    $ok = false;
    $msgErro = 'Preencha o campo de usuario.';
  }
  if (!(isset($_POST['senha']))){
    $ok = false;
    $msgErro = 'Preencha campo de senha.';
  }
  if (!(isset($_POST['senha2']))){
    $ok = false;
    $msgErro = 'Preencha campo de confirmar senha.';
  }else{
		if (!($_POST['senha2'] == $_POST['senha'])){
	    $ok = false;
	    $msgErro = 'Senha deve ser igual a confirmação da senha.';
		}
	}
  if (isset($_POST['tipo_cliente'])){
		$cliente = true;
  }
  if (isset($_POST['tipo_fornecedor'])){
    $fornecedor = true;
  }
  if (!(isset($_POST['nomeCompleto']))){
    $ok = false;
    $msgErro = 'Preencha seu nome.';
  }
  if (!(isset($_POST['dtNasc']))){
    $ok = false;
    $msgErro = 'Preencha sua data de nascimento.';
  }
  if (!(isset($_POST['rg']))){
    $ok = false;
    $msgErro = 'Preencha seu RG.';
  }
  if (!(isset($_POST['cpf']))){
    $ok = false;
    $msgErro = 'Preencha seu CPF.';
  }
  if (!(isset($_POST['telefone']))){
    $ok = false;
    $msgErro = 'Preencha um telefone para contato.';
  }
  if (!(isset($_POST['estado']))){
    $ok = false;
    $msgErro = 'Preencha o estado.';
  }
  if (!(isset($_POST['cidade']))){
    $ok = false;
    $msgErro = 'Preencha a cidade.';
  }

  if ($ok){
    // query("INSERT into servicos (nome, descricao, estado, cidade) values ('".$_POST['nome']."' , '". $_POST['desc']."' , '". $_POST['estado']."' , '". $_POST['cidade']."');");
		echo 'ok';
  }else{
    echo $msgErro;
  }

?>
