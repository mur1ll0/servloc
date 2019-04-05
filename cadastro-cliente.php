<?/*
###########################################################
#                     --CADASTRO SERVIÇOS--               #
#                                                         #
#                Autor: Murillo André Maleski             #
#                           SERVLOC                       #
###########################################################
*/?>

<?php
	require 'comum.php';

	session_start();

	c_header_sideless();
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

				<form method = "POST" class="form-vertical  js-form-loading">

					<div class="form-group">
						<label for="nome">Usuário</label>
						<input id="nome" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">Senha</label>
						<input id="dt-nasc" type="pasword" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">Confirmar Senha</label>
						<input id="dt-nasc" type="pasword" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="tipo_usuario">Intuito do Cadastro:</label>
				    <div class="form-group-text">
							<label for="usuario_cliente">Locar Serviços: </label>
				      <input id="tipo_cliente" type="checkbox" >
				    </div>
				    <div class="form-group-text">
							<label for="usuario_cliente">Fornecer Serviços:</label>
				      <input id="tipo_fornecedor" type="checkbox" >
				    </div>
					</div>

					<div class="form-group">
						<label for="nome">Nome Completo</label>
						<input id="nome" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">Data de Nascimento</label>
						<input id="dt-nasc" type="date" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">RG</label>
						<input id="rg" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">CPF</label>
						<input id="cpf" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="nome">Telefone</label>
						<input id="telfone" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="contato">Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control">
								<?php
									opt_select_estado();
								?>
							</select>
							<input id="cidade" type="text" class="form-control" value="Digite sua Cidade"/>
						</div>
					</div>

					<div class="form-group">
						<label for="nome">Endereço</label>
						<input id="endereco" type="text" class="form-control"/>
					</div>

					<div class="form-inline">
						<div class="form-group">
							<label for="nome">Numero</label>
							<input id="numero-end" type="text" class="form-control"/>
						</div>

						<div class="form-group">
							<label for="nome">Bairro</label>
							<input id="bairro" type="text" class="form-control"/>
						</div>
					</div>

					<div class="form-group">
						<label for="contato">Email</label>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-mail"/></svg></div>
							<input id="email" type="text" class="form-control"/>
						</div>
					</div>

					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Concluir</button>
					</div>

				</form>
			</div>
		</section>



<?php
	c_footer_sideless();
?>
