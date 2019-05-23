<?/*
###########################################################
#                     --CADASTRO CLIENTES--               #
#                                                         #
#                Autor: Murillo André Maleski             #
#                           SERVLOC                       #
###########################################################
*/?>

<?php
	require 'comum.php';

	session_start();

	c_header();
?>

	<div class="aw-layout-page">

		<section class="aw-layout-content  js-content">
			<div class="page-header">
				<div class="container-fluid">
					<h1>
						Cadastro de usuário
					</h1>
				</div>
			</div>

			<div class="container-fluid">

				<form onsubmit="submitForm();return false;" id="form_cadCliente" class="form-vertical  js-form-loading">

					<div class="form-group">
						<label>Usuário</label>
						<input name='usuario' id="usuario" type="text" class="form-control" maxLength="10" value=""/>
					</div>

					<div class="form-group">
						<label>Senha</label>
						<input name='senha' id="senha" type="password" class="form-control" maxLength="12" value=""/>
					</div>

					<div class="form-group">
						<label>Confirmar Senha</label>
						<input name='senha2' id="senha2" type="password" class="form-control" maxLength="12" value=""/>
					</div>

					<div class="form-group">
						<label for="tipo_usuario">Intuito do Cadastro:</label>
				    <div class="form-group-text">
							<label for="tipo_cliente">Locar Serviços: </label>
				      <input name='tipo_cliente' id="tipo_cliente" type="checkbox">
				    </div>
				    <div class="form-group-text">
							<label for="tipo_fornecedor">Fornecer Serviços:</label>
				      <input name='tipo_fornecedor' id="tipo_fornecedor" type="checkbox">
				    </div>
					</div>

					<div class="form-group">
						<label>Nome Completo</label>
						<input name='nomeCompleto' id="nomeCompleto" type="text" class="form-control" maxLength="64" value=""/>
					</div>

					<div class="form-group">
						<label>Data de Nascimento</label>
						<input name='dtNasc' id="dtNasc" type="date" class="form-control" value=""/>
					</div>

					<div class="form-group">
						<label>RG</label>
						<input name='rg' id="rg" type="text" class="form-control" maxLength="10" value=""/>
					</div>

					<div class="form-group">
						<label>CPF</label>
						<input name='cpf' id="cpf" type="text" class="form-control" data-mask="000.000.000-00" maxLength="11" value=""/>
					</div>

					<div class="form-group">
						<label>Telefone</label>
						<input name='telefone' id="telefone" type="text" class="form-control" maxLength="11" value=""/>
					</div>

					<div class="form-group">
						<label>Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control">
								<?php
									opt_select_estado();
								?>
							</select>
							<input name='cidade' id="cidade" type="text" class="form-control" maxLength="64" value=""/>
						</div>
					</div>

					<div class="form-group">
						<label>Endereço</label>
						<input name='endereco' id="endereco" type="text" class="form-control" maxLength="64" value=""/>
					</div>

					<div class="form-inline">
						<div class="form-group">
							<label>Numero</label>
							<input name='numeroEnd' id="numeroEnd" type="text" class="form-control" maxLength="8" value=""/>
						</div>

						<div class="form-group">
							<label>Bairro</label>
							<input name='bairro' id="bairro" type="text" class="form-control" maxLength="64" value=""/>
						</div>
					</div>

					<div class="form-group">
						<label>Email</label>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-mail"/></svg></div>
							<input name='email' id="email" type="text" class="form-control" maxLength="64" value=""/>
						</div>
					</div>

					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Concluir</button>
					</div>

				</form>
			</div>
		</section>

<script>
	function submitForm(){
		var form = document.getElementById('form_cadCliente');
		xhr = new XMLHttpRequest();

		xhr.open('POST', 'static/php/class-valida-cad-cli.php?id=1231231231');
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.onload = function() {
			if (xhr.status === 200) {
				alert(xhr.responseText);
			}
			else if (xhr.status !== 200) {
				alert('Request failed.  Returned status of ' + xhr.status);
			}
		};
		xhr.send(encodeURI(new URLSearchParams(new FormData(form)).toString()));

	}
</script>

<?php
	c_footer_sideless();
?>
