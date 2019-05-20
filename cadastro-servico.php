<?php
/*
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

	c_header();

	$data = $_POST[0];
	var_dump($data);
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
					<!-- // if (isset($_POST['nome'])){
					// 	echo "<h1>Serviço cadastrado: ".$_POST['nome']."</h1>";
					// 	query("INSERT into servicos (nome, descricao, estado, cidade) values ('".$_POST['nome']."' , '". $_POST['desc']."' , '". $_POST['estado']."' , '". $_POST['cidade']."');");
					// } -->

				<form onsubmit="submitForm();return false;" id="form_cadServico" method="POST" class="form-vertical js-form-loading" target="">

					<div class="form-group">
						<label for="nome">Nome</label>
						<input name="nome" type="text" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"/>
					</div>

					<div class="form-group">
						<label for="desc">Descrição</label>
						<textarea name="desc" rows="5" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"></textarea>
					</div>

					<div class="form-group">
						<label for="contato">Localização</label>
						<div class="form-inline">
							<select name="estado" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>">
								<?php
									opt_select_estado();
								?>
							</select>
							<?php
								/*if $_POST['edit'] == 1{
									$result = query(Select form where id = 5)
									echo "<input name='cidade' type='text' class='form-control' value='".$result[0][4]."'/>"
								}
								else{
									echo <input name="cidade" type="text" class="form-control" value="Digite sua Cidade"/>
								}*/
							?>
							<input name="cidade" type="text" class="form-control" value="Digite sua Cidade" value="<?php if (isset($data)) echo $data['author']; ?>"/>
						</div>
					</div>

					<div class="form-group">
						<label for="categorias">Categorias</label>
						<select name="categoria" id='optgroup' multiple='multiple' value="<?php if (isset($data)) echo $data['author']; ?>">
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
							<textarea name="telefone" id="contato" rows="3" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"></textarea>
						</div>
						<div class="input-group">
							<div class="input-group-addon"><svg-icon class="glyph-icon"><src href="static/sprite/sprite.svg#si-glyph-mail"/></svg></div>
							<input name="email" id="email" type="text" class="form-control" value="<?php if (isset($data)) echo $data['author']; ?>"/>
						</div>
					</div>

					<div class="form-group">
						<button class="btn  btn-primary" type="submit">Cadastrar Serviço</button>
					</div>

				</form>
			</div>
		</section>

<?php
	c_footer();
?>

	<script>
		function submitForm(){
			var form = document.querySelector('form');
			xhr = new XMLHttpRequest();

			xhr.open('POST', 'static/php/class-valida-cad-serv.php');
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
	// function submitForm(){
	// 	$.ajax({
	// 		type: "POST",
	// 		url: 'static/php/forms.php',
	// 		data: $('#form_cadServico').serialize(),
	// 		success: function(response){
	// 			//$('#Modal .modal-header .modal-title').html("Resultado em POST");
	// 			//$('#Modal .modal-body').html(response);
	// 		}
	// 	});
	// }
	</script>


</body>
</html>
