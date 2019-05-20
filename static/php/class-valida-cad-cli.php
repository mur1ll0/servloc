<?php
	require '../../static/php/connection.php';
  $ok = true;
  $msgErro = '';

  if ($ok && !empty($_POST['usuario'])){
    $result = query("SELECT count(*) teste FROM pessoas WHERE usuario = '".$_POST['usuario']."'");
    if ($result[0][0] > 0){
      $ok = false;
      $msgErro = $msgErro.' '.'Usuario já cadastrado.';
    }
  }else{
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o campo de usuario.';
  }
  if ($ok && empty($_POST['senha'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha campo de senha.';
  }
  if ($ok && empty($_POST['senha2'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha campo de confirmar senha.';
  }else{
		if (!($_POST['senha2'] == $_POST['senha'])){
	    $ok = false;
	    $msgErro = $msgErro.' '.'Senha deve ser igual a confirmação da senha.';
		}
	}
	$cliente = 0;
  if ($ok && !empty($_POST['tipo_cliente'])){
		$cliente = 1;
  }
	$fornecedor = 0;
  if ($ok && !empty($_POST['tipo_fornecedor'])){
    $fornecedor = 1;
  }
  if ($ok && empty($_POST['nomeCompleto'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha seu nome.';
  }
  if ($ok && empty($_POST['dtNasc'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha sua data de nascimento.';
  }
  if ($ok && empty($_POST['rg'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha seu RG.';
  }
  if ($ok && empty($_POST['cpf'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha seu CPF.';
  }
  if ($ok && empty($_POST['telefone'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha um telefone para contato.';
  }
  if ($ok && empty($_POST['estado'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha o estado.';
  }
  if ($ok && empty($_POST['cidade'])){
    $ok = false;
    $msgErro = $msgErro.' '.'Preencha a cidade.';
  }
  if ($ok){

			$nomeCompleto = isset($_POST['nomeCompleto'])?$_POST['nomeCompleto']:'';
			$rg = isset($_POST['rg'])?$_POST['rg']:'';
			$cpf = isset($_POST['cpf'])?$_POST['cpf']:'';
			$telefone = isset($_POST['telefone'])?$_POST['telefone']:'';
			$email = isset($_POST['email'])?$_POST['email']:'';
			$endereco = isset($_POST['endereco'])?$_POST['endereco']:'';
			$bairro = isset($_POST['bairro'])?$_POST['bairro']:'';
			$numero = isset($_POST['numero'])?$_POST['numero']:'';
			$cidade = isset($_POST['cidade'])?$_POST['cidade']:'';
			$estado = isset($_POST['estado'])?$_POST['estado']:'';
			$usuario = isset($_POST['usuario'])?$_POST['usuario']:'';
			$senha = isset($_POST['senha'])?$_POST['senha']:'';
    query("INSERT into pessoas
						(nome, rg, cpf, telefone, email, endereco, bairro, numero, cidade, uf, usuario, senha, fornecedor, cliente)
					values
						('". $nomeCompleto ."',
						'". $rg ."',
						'". $cpf ."',
						'". $telefone ."',
						'". $email ."',
						'". $endereco ."',
						'". $bairro ."',
						'". $numero ."',
						'". $cidade ."',
						'". $estado ."',
						'". $usuario ."',
						'". $senha ."',
						'". $cliente ."',
						'". $fornecedor ."');");

		echo "Cadastro realizado com sucesso.";
  }else{
    echo $msgErro;
  }

?>
