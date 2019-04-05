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
						Cadastro de serviço
					</h1>
				</div>
			</div>

			<div class="container-fluid">
				<?php
					if (isset($_POST['titulo'])){
						echo '<h1>Serviço cadastrado: '.$_POST['titulo'].'</h1>';
						query("INSERT into servico (titulo, descricao, estado, cidade) values ('".$_POST['titulo']."' , '". $_POST['desc']."' , '". $_POST['estado']."' , '". $_POST['cidade']."');");
					}
				?>

				<form id="form_cadServico" method="POST" class="form-vertical js-form-loading" target="cadastro-servico.php">

					<div class="form-group">
						<label for="nome">Título</label>
						<input name="titulo" type="text" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="desc">Descrição</label>
						<textarea name="desc" rows="5" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="contato">Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control">
								<?php
									opt_select_estado();
								?>
							</select>
							<input name="cidade" type="text" class="form-control" value="Digite sua Cidade"/>
						</div>
					</div>

					<div class="form-group">
						<label for="categorias">Categorias</label>
						<select id='optgroup' multiple='multiple'>
							<?php
								opt_select_servico();
							?>
						</select>
					</div>

					<div class="form-group">
						<label for="categorias">Tags</label>
						<input type="text" class="form-control" name="tags"/>
					</div>

					<div class="form-group">
						<label for="contato">Contatos</label>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-call"/></svg></div>
							<textarea id="contato" rows="3" class="form-control"></textarea>
						</div>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-mail"/></svg></div>
							<input id="email" type="text" class="form-control"/>
						</div>
					</div>

					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Cadastrar Serviço</button>
					</div>

				</form>
			</div>
		</section>

<?php
	c_footer_sideless();
?>

	<script>
	function submitForm(){
		$.ajax({
			type: "POST",
			url: 'static/php/forms.php',
			data: $('#form_cadServico').serialize(),
			success: function(response){
				//$('#Modal .modal-header .modal-title').html("Resultado em POST");
				//$('#Modal .modal-body').html(response);
			}
		});
	}
	</script>


</body>
</html>
